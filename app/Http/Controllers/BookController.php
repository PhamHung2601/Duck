<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItem;
use App\Product;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;

/**
 * Class CheckoutController
 * @package App\Http\Controllers
 */
class BookController extends Controller
{
    /**
     * CheckoutController constructor.
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function index($id)
    {
        if($id){
            $product = Product::select('*')->find($id);
            return view('book/detail',['product'=>$product]);
        }

        return Redirect('home');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list()
    {
        $products = Product::orderBy('id', 'desc')->paginate(12);
        return view('book/list',['products'=>$products]);
    }

}
