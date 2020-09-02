<?php

namespace App\Http\Controllers;

use App\rc;
use App\User;
use Illuminate\Http\Request;
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
            $result = $payment->execute($execution, $this->apiContext);
            dd($result);
        }catch (\Exception $e){
    return "Failed";
        }

    }

    public function store(Request $request)
    {
        $user = User::where('id',"2")->first();
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");
        $item1 = new Item();
        $item1->setName('Nạp tiền vào tài khoản '.$user->name)
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setSku("123123")
            ->setPrice(20);
        $item2 = new Item();
//        $item2->setName('Granola bars')
//            ->setCurrency('USD')
//            ->setQuantity(5)
//            ->setSku("321321")
//            ->setPrice(2);
//        $itemList = new ItemList();
//        $itemList->setItems(array($item1, $item2));
//
//        $details = new Details();
//        $details->setShipping(1.2)
//            ->setTax(1.3)
//            ->setSubtotal(17.50);

        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal(20);
//            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
//            ->setItemList($itemList)
            ->setDescription("Thanh toán cho anh Bằng đẹp trai")
            ->setInvoiceNumber(uniqid());

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(route('payment.create'))
            ->setCancelUrl(route('payment.create'));

        $payment = new Payment();
        $payment->setIntent("sale")
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
