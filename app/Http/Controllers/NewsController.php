<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\News;

/**
 * Class NewsController
 * @package App\Http\Controllers
 */
class NewsController extends Controller
{
    /**
     * CartController constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $news = DB::table('news')->get();
        return view('news.list', ['news' => $news]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|string
     */
    public function view(Request $request,$id)
    {



        $news = News::select('id', 'title', 'description')->find($id);
        if (!isset($news)) {
            return 'Bản tin không tồn tại';
        }
        return view('news.view', ['news' => $news]);
    }

}
