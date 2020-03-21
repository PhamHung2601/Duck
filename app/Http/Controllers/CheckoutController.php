<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItem;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;

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

        $validatedData = $request->validate([
            'fullName' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phoneNumber' => 'required|digits_between:10,12'
        ]);

        try {
            $order = new Order();
            $order->customer_name = $validatedData['fullName'];
            $order->customer_email = $validatedData['email'];
            $order->address = $validatedData['address'];
            $order->phone = $validatedData['phoneNumber'];
            $order->total = Cart::total();
            $order->message = isset($validatedData['phoneNumber']) ? $validatedData['phoneNumber'] : '';
            $order->payment_method = isset($validatedData['payment_method']) ? $validatedData['payment_method'] : '';
            $order->save();

            if (count($cartInfo) > 0) {
                foreach ($cartInfo as $key => $item) {
                    $orderItem = new OrderItem();
                    $orderItem->order_id = $order->id;
                    $orderItem->product_id = $item->id;
                    $orderItem->product_price = $item->price;
                    $orderItem->product_name = $item->name;
                    $orderItem->total = $item->subtotal;
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
