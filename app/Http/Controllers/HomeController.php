<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\News;
use App\Product;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * HomeController constructor.
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
        $news = News::orderBy('id', 'desc')->take(6)->get();
        $products = Product::orderBy('id', 'desc')->take(6)->get();
        return view('home-page/home', compact('news', 'products'));
    }
}
