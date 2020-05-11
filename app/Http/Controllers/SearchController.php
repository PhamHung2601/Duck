<?php

namespace App\Http\Controllers;

use App\Document;
use App\News;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use function Psy\debug;

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
        $products = Product::select('*')->where('name', 'LIKE', '%' . $searchText . '%')->get();
        $news = News::select('*')
            ->join('news_tag', 'news.id', '=', 'news_tag.news_id')
            ->join('tag','tag.id','=','news_tag.tag_id')
            ->where('tag.name', 'LIKE', '%' .$searchText. '%')
            ->orWhere('news.title', 'LIKE', '%' .$searchText. '%')
            ->orWhere('news.description', 'LIKE', '%' .$searchText. '%')
            ->get();
        $documents = Document::select('*')
            ->where('tag', 'LIKE', '%' .$searchText. '%')
            ->orWhere('title', 'LIKE', '%' .$searchText. '%')
            ->orWhere('short_description', 'LIKE', '%' .$searchText. '%')
            ->orWhere('content', 'LIKE', '%' .$searchText. '%')
            ->get();

        return view('layouts.searchresult', ['products' => $products,'news'=>$news,'documents'=>$documents]);
    }
}
