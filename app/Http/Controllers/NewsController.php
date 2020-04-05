<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Tag;
use Mockery\Exception;

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
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $tagParam = $request->tag;
        if ($tagParam) {
            try {
                /** @var Tag $tag */
                $tag = Tag::where('name',$tagParam)->first();
                $newsList = $tag->news;
                $newsList = $tag->news()::orderBy('id', 'desc')->paginate(10);
            } catch (\Exception $e) {

                        echo '<pre>';print_r($e->getMessage());die('**lk-debug**');


                $newsList = News::orderBy('id', 'desc')->paginate(10);
            }
        } else {
            $newsList = News::orderBy('id', 'desc')->paginate(10);
        }

        return view('news.list', ['news' => $newsList]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function show(Request $request, $id)
    {
        /** @var News $news $news */
        $news = News::select('*')->find($id);
        if (!isset($news)) {
            return Redirect('/');
        }
        return view('news.view', [
            'news' => $news
        ]);
    }

}
