<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItem;
use Illuminate\Http\Request;

use App\Product;

use Cart;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $this->data['title'] = 'Checkout';
        $this->data['cart'] = Cart::content();
        $this->data['total'] = Cart::total();
        return view('layouts.checkout', $this->data);
    }

    public function saveOrder(Request $request) {
        $cartInfor = Cart::content();
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
            //$customer->note = $request->note;
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

            if (count($cartInfor) >0) {
                foreach ($cartInfor as $key => $item) {
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
