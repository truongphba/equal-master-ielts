<?php

namespace App;

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
use PayPal\Api\Payer;
use PayPal\Api\PaymentExecution;
use Illuminate\Http\Request;

class PayPalService extends Model
{
    // Chứa context của API
    private $apiContext;
    // Chứa danh sách các item (mặt hàng)
    private $itemList;
    // Đơn vị tiền thanh toán
    private $paymentCurrency;
    // Tổng tiền của đơn hàng
    private $totalAmount;
    // Đường dẫn để xử lý một thanh toán thành công
    private $returnUrl;
    // Đường dẫn để xử lý khi người dùng bấm cancel (không thanh toán)
    private $cancelUrl;

    public function __construct()
    {
        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                config('paypal.client_id'),
                config('paypal.secret')
            )
        );
        $this->apiContext->setConfig(config('paypal.settings'));
        $this->paymentCurrency = "USD";
        $this->totalAmount = 0;
    }

    //Đơn vị tiền tệ
    public function setCurrency($currency)
    {
        $this->paymentCurrency = $currency;
        return $this;
    }

    public function getCurrency()
    {
        return $this->paymentCurrency;
    }

    //Thêm sản phẩm vào list
    public function setItem($itemData)
    {
        if (count($itemData) === count($itemData, COUNT_RECURSIVE)) {
            $itemData = [$itemData];
        }
        foreach ($itemData as $data) {
            $item = new Item();
            // Set tên của item
            $item->setName($data['name'])
                ->setCurrency($this->paymentCurrency) // Đơn vị tiền của item
                ->setSku($data['sku']) // ID của item
                ->setQuantity($data['quantity']) // Số lượng
                ->setPrice($data['price']); // Giá
            // Thêm item vào danh sách
            $this->itemList[] = $item;
            // Tính tổng đơn hàng
            $this->totalAmount += $data['price'] * $data['quantity'];
        }
        return $this;
    }

    public function getItemList()
    {
        return $this->itemList;
    }

    //TỔNG tiền đơn hàng
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    //cài đặt đường dẫn khi thành công
    public function setReturnUrl($url)
    {
        $this->returnUrl = $url;

        return $this;
    }

    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    //Khi người dùng hủy thanh toán
    public function setCancelUrl($url)
    {
        $this->cancelUrl = $url;

        return $this;
    }

    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    //Function này sẽ nhận tất cả các property mà chúng ta đã khai báo ở trên, tạo transaction rồi trả về đường dẫn tương ứng với thanh toán mà chúng ta đã tạo:
    public function createPayment($transactionDescription)
    {
        $checkoutUrl = false;

        // Chọn kiểu thanh toán.
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        // Danh sách các item
        $itemList = new ItemList();
        $itemList->setItems($this->itemList);

        // Tổng tiền và kiểu tiền sẽ sử dụng để thanh toán.
        // Bạn nên đồng nhất kiểu tiền của item và kiểu tiền của đơn hàng
        // tránh trường hợp đơn vị tiền của item là JPY nhưng của đơn hàng
        // lại là USD nhé.
        $amount = new Amount();
        $amount->setCurrency($this->paymentCurrency)
            ->setTotal($this->totalAmount);

        // Transaction
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription($transactionDescription);

        // Đường dẫn để xử lý một thanh toán thành công.
        $redirectUrls = new RedirectUrls();

        // Kiểm tra xem có tồn tại đường dẫn khi người dùng hủy thanh toán
        // hay không. Nếu không, mặc định chúng ta sẽ dùng luôn $redirectUrl
        if (is_null($this->cancelUrl)) {
            $this->cancelUrl = $this->returnUrl;
        }

        $redirectUrls->setReturnUrl($this->returnUrl)
            ->setCancelUrl($this->cancelUrl);

        // Khởi tạo một payment
        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions([$transaction]);

        // Thực hiện việc tạo payment
        try {
            $payment->create($this->apiContext);
        } catch (\PayPal\Exception\PPConnectionException $paypalException) {
            throw new \Exception($paypalException->getMessage());
        }

        // Nếu việc thanh tạo một payment thành công. Chúng ta sẽ nhận
        // được một danh sách các đường dẫn liên quan đến việc
        // thanh toán trên PayPal
        foreach ($payment->getLinks() as $link) {
            // Duyệt từng link và lấy link nào có rel
            // là approval_url rồi gán nó vào $checkoutUrl
            // để chuyển hướng người dùng đến đó.
            if ($link->getRel() == 'approval_url') {
                $checkoutUrl = $link->getHref();
                // Lưu payment ID vào session để kiểm tra
                // thanh toán ở function khác
                session(['paypal_payment_id' => $payment->getId()]);

                break;
            }
        }

        // Trả về url thanh toán để thực hiện chuyển hướng
        return $checkoutUrl;
    }

    //kiểm tra trạng thái của một payment dựa theo session có chứa payment ID mà chúng ta đã gán ở function createPayment
    public function getPaymentStatus()
    {
        // Khởi tạo request để lấy một số query trên
        // URL trả về từ PayPal
        $request = Request::all();

        // Lấy Payment ID từ session
        $paymentId = session('paypal_payment_id');
        // Xóa payment ID đã lưu trong session
        session()->forget('paypal_payment_id');

        // Kiểm tra xem URL trả về từ PayPal có chứa
        // các query cần thiết của một thanh toán thành công
        // hay không.
        if (empty($request['PayerID']) || empty($request['token'])) {
            return false;
        }

        // Khởi tạo payment từ Payment ID đã có
        $payment = Payment::get($paymentId, $this->apiContext);

        // Thực thi payment và lấy payment detail
        $paymentExecution = new PaymentExecution();
        $paymentExecution->setPayerId($request['PayerID']);

        $paymentStatus = $payment->execute($paymentExecution, $this->apiContext);

        return $paymentStatus;
    }

    //lấy danh sách các thanh toán đã được thực hiện. Function nhận 02 tham số là số lượng bản ghi trả về và index của payment muốn lấy (sử dụng để phân trang):
    public function getPaymentList($limit = 10, $offset = 0)
    {
        $params = [
            'count' => $limit,
            'start_index' => $offset
        ];

        try {
            $payments = Payment::all($params, $this->apiContext);
        } catch (\PayPal\Exception\PPConnectionException $paypalException) {
            throw new \Exception($paypalException->getMessage());
        }

        return $payments;
    }

    //Function lấy chi tiết một payment dựa theo payment ID:
    public function getPaymentDetails($paymentId)
    {
        try {
            $paymentDetails = Payment::get($paymentId, $this->apiContext);
        } catch (\PayPal\Exception\PPConnectionException $paypalException) {
            throw new \Exception($paypalException->getMessage());
        }

        return $paymentDetails;
    }
}
