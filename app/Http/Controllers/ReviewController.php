<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Mockery\Exception;

/**
 * Class ReviewController
 * @package App\Http\Controllers
 */
class ReviewController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|string
     */
    public function submit(Request $request)
    {
        if (!$request->isMethod('post'))
            return Redirect('/');
        $review = new Review;
        $review->nickname = $request->input('nickname');
        $review->summary = $request->input('summary');
        $review->content = $request->input('content');
        try {
            $review->save();
        } catch (Exception $e) {

        }
        return back();
    }

}
