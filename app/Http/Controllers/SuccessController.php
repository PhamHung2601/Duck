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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if(session('order_id')){
            $orderId = session('order_id');
            $order = Order::select('*')->find($orderId);
            return view('layouts.success', ['order' => $order]);
        }

        return Redirect('home');
    }

}
