<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItem;
use App\Product;
use Cart;
use Illuminate\Http\Request;

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
            'phoneNumber' => 'required|digits_between:10,12',
            'payment_method' => 'required',
            'shippingFee' => 'required',
        ]);

        if (count($cartInfo) > 0) {
            foreach ($cartInfo as $key => $item) {
                $product = Product::select('stock')->find($item->id);
                if ($product->stock < $item->qty) {
                    return redirect()->route('cart.index')->with('error', 'Không đủ số lượng hàng trong kho');
                }
            }
        }
        try {
            $order = new Order();
            $shippingFee = (float)$validatedData['shippingFee'];
            $order->customer_name = $validatedData['fullName'];
            $order->customer_email = $validatedData['email'];
            $order->address = $validatedData['address'];
            $order->phone = $validatedData['phoneNumber'];
            $order->total = Cart::subtotalFloat();
            $order->grand_total = Cart::subtotalFloat() + $shippingFee ?? 0;
            $order->shipping_fee = $shippingFee;
            $order->message = $request->message ?: '';
            $order->payment_method = isset($validatedData['payment_method']) ? $validatedData['payment_method'] : '';
            $order->save();

            if (count($cartInfo) > 0) {
                foreach ($cartInfo as $key => $item) {
                    $product = Product::find($item->id);
                    $orderItem = new OrderItem();
                    $orderItem->order_id = $order->id;
                    $orderItem->product_id = $item->id;
                    $orderItem->product_price = $item->price;
                    $orderItem->product_name = $item->name;
                    $orderItem->total = $item->subtotal;
                    $orderItem->qty = $item->qty;
                    $orderItem->save();
                    $product->decrement('stock',$item->qty);
                }
            }
            Cart::destroy();
            return redirect('success')->with('order_id', $order->id);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}
