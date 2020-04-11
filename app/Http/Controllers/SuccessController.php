<?php

namespace App\Http\Controllers;

use App\Order;
use Cart;

/**
 * Class CheckoutController
 * @package App\Http\Controllers
 */
class SuccessController extends Controller
{
    /**
     * CheckoutController constructor.
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function index()
    {
        if(session('order_id')){
            $orderId = session('order_id');
            $order = Order::select('*')->find($orderId);
            return view('layouts.success', ['order' => $order]);
        }

        return Redirect('/');
    }

}
