<?php

namespace App\Http\Controllers;

use App\rc;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

//use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;

use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

class PaymentController extends Controller
{
    private $apiContext;

    public function __construct()
    {
        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                config('paypal.client_id'),
                config('paypal.secret')
            )
        );
        $this->apiContext->setConfig(config('paypal.settings'));
    }

    private function getPaymentList($limit = 100, $offset = 0)
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

    private function getPaymentDetails($paymentId)
    {
        try {
            $paymentDetails = Payment::get($paymentId, $this->apiContext);
        } catch (\PayPal\Exception\PPConnectionException $paypalException) {
            throw new \Exception($paypalException->getMessage());
        }

        return $paymentDetails;
    }

    public function index()
    {
        //
    }

    public function create(Request $request)
    {
        $payment_id = Session::get('payment_id');
        Session::forget('payment_id');
        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));
        $payment = Payment::get($payment_id, $this->apiContext);
        try {
            $user = User::where('id', 2)->first();
            $result = $payment->execute($execution, $this->apiContext);
            $arr = $this->getPaymentList();
            $his[] = null;
            $r = (object)[
                'payment_id' => $result->id,
                'user_id' => $result->transactions[0]->description,
                'money' => $result->transactions[0]->amount->total,
                'time' => $result->update_time,
            ];
            if ($user->id == $r->user_id) {
                $user->balance = $user->balance + $r->money;
                $user->save();
                foreach ($arr->payments as $item) {
                    if ($item->transactions[0]->description == $user->id) {
                        $his[] = (object)[
                            'payment_id' => $item->id,
                            'user_id' => $item->transactions[0]->description,
                            'money' => $item->transactions[0]->amount->total,
                            'time' => $item->update_time,
                        ];
                    }
                }
                dd([
                    'payment' => $r,
                    'history' => $his,
                    'totalMoney'=>$user->balance
                ]);
            }
        } catch (\Exception $e) {
            return $e;
        }

    }

    public function store(Request $request)
    {
        //thông tin Đức cần gửi cho
        //1.user
        $user = User::find(2);
        //2. số tiền nập vào tài khoản
        $money = 99;
        //End
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");
        $item1 = new Item();
        $item1->setName('Thanh toán tiền nạp vào hệ thống Luyện thi Ielt Equal Master Ielt cho tài khoản ' . $user->name)
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($money);
//        $item2 = new Item();
//        $item2->setName('Granola bars')
//            ->setCurrency('USD')
//            ->setQuantity(5)
//            ->setSku("321321")
//            ->setPrice(2);
        $itemList = new ItemList();
        $itemList->setItems(array($item1));
//
//        $details = new Details();
//        $details->setShipping(1.2)
//            ->setTax(1.3)
//            ->setSubtotal(17.50);

        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal($money);
//            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription($user->id)
            ->setInvoiceNumber(uniqid());
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(route('payment.create'))//
            ->setCancelUrl(route('payment.create'));

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($this->apiContext);
        } catch (Exception $ex) {
            echo('Faild');
            exit(1);
        }

        $approvalUrl = $payment->getApprovalLink();
        Session::put('payment_id', $payment->id);
        return redirect()->to($approvalUrl);
    }


    public function show(rc $rc)
    {
        //
    }


    public function edit(rc $rc)
    {
        //
    }


    public function update(Request $request, rc $rc)
    {
        //
    }


    public function destroy(rc $rc)
    {
        //
    }
}
