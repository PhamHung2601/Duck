<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/**
 * Class SearchController
 * @package App\Http\Controllers
 */
class SearchController extends Controller
{
    /**
     * SearchController constructor.
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $validatedData = $request->validate([
            'search_text' => 'required'
        ]);
        $searchText = $validatedData['search_text'];
        $products = DB::table('products')->where('name', 'LIKE', '%' . $searchText . '%')->get();
        $news = [];
        return view('layouts.searchresult', ['products' => $products,'news'=>$news]);
    }
}
