<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItem;
use Illuminate\Http\Request;
use Cart;

/**
 * Class CheckoutController
 * @package App\Http\Controllers
 */
class CheckoutController extends Controller
{
    /**
     * CheckoutController constructor.
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->data['title'] = 'Checkout';
        $this->data['cart'] = Cart::content();
        $this->data['total'] = Cart::total();
        return view('layouts.checkout', $this->data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function saveOrder(Request $request)
    {
        $cartInfo = Cart::content();
        // validate
        $rule = [
            'fullName' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phoneNumber' => 'required|digits_between:10,12'

        ];

        $validator = Validator::make(Input::all(), $rule);

        if ($validator->fails()) {
            return redirect('/checkout')
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // save
            $customer = new Customer;
            $customer->name = Request::get('fullName');
            $customer->email = Request::get('email');
            $customer->address = Request::get('address');
            $customer->phone_number = Request::get('phoneNumber');
            $customer->save();

            $order = new Order();
            $order->customer_name = Request::get('fullName');
            $order->customer_email = Request::get('email');
            $order->address = Request::get('address');
            $order->phone = Request::get('phoneNumber');
            $order->total = Cart::total();
            $order->message = Request::get('message');
            $order->payment_method = Request::get('payment_method');
            $order->save();

            if (count($cartInfo) > 0) {
                foreach ($cartInfo as $key => $item) {
                    $orderItem = new OrderItem();
                    $orderItem->order_id = $order->id;
                    $orderItem->product_id = $item->id;
                    $orderItem->product_price = $item->price;
                    $orderItem->qty = $item->qty;
                    $orderItem->save();
                }
            }
            Cart::destroy();

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
