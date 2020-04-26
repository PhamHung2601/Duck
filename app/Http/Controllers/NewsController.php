<?php

namespace App\Http\Controllers;

use App\Document;
use App\Test;
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
        $tests = Test::orderBy('id','desc')->get();
        $documents = Document::orderBy('position','desc')->get();
        $tagParam = $request->tag;
        if ($tagParam) {
            try {
                /** @var Tag $tag */
                $tag = Tag::where('name',$tagParam)->first();
                $newsList = $tag->news;
                if (count($newsList)) {
                    $newsList = News::whereIn('id', $newsList->pluck('id')->toArray())->orderBy('id', 'desc')->paginate(10);
                }
            } catch (\Exception $e) {
                $newsList = News::orderBy('id', 'desc')->paginate(10);
            }
        } else {
            $newsList = News::orderBy('id', 'desc')->paginate(10);
        }
        return view('news.list', ['news' => $newsList],compact('tests','documents'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function show(Request $request, $id)
    {
        $documents= Document::orderBy('id','desc')->get();
        $tests = Test::orderBy('id','desc')->get();
        $allNews = News::orderBy('id','desc')->get();
        /** @var News $news $news */
        $news = News::select('*')->find($id);
        if (!isset($news)) {
            return Redirect('/');
        }
        return view('news.view', [
            'news' => $news,
            'tests' => $tests,'documents'=>$documents,'all'=>$allNews
        ]);
    }

}
