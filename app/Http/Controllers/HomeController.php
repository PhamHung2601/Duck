<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\News;
use App\Product;
use App\Document;
use App\Test;
use Exception;
use Artesaos\SEOTools\Facades\SEOMeta;

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

        $tests = Test::orderBy('id','desc')->get();
        $documents = Document::orderBy('position','desc')->get();
        return view('home-page/home', compact('news', 'products','tests','documents'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addContactEmail(Request $request)
    {
        if (!$request->isMethod('post'))
            return back();
        $email = $request->input('email');
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('error','Có lỗi xảy ra.Vui lòng kiểm tra lại email.');
        }
        try {
            DB::table('contacts')->updateOrInsert(
                ['email' => $email]
            );
            return redirect()->back()->with('success','Bạn đã đăng kí thành công.');
        } catch (Exception $e) {
            return redirect()->back()->with('error','Có lỗi xảy ra.Vui lòng kiểm tra lại email.');
        }
    }
}
