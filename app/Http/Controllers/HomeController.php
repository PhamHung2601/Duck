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
        $month = $this->getStudentWithRankingByMonth();
        $course = $this->getStudentWithRankingByCourse();
        $tests = Test::orderBy('id','desc')->get();
        $documents = Document::orderBy('position','desc')->get();
        return view('home-page/home', compact('news', 'products', 'month', 'course','tests','documents'));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getStudentWithRankingByMonth()
    {
        $month = date('m');
        $student = DB::table('students')
            ->join('rank_points', 'students.id', '=', 'rank_points.student_id')
            ->select('students.*', 'rank_points.*')
            ->orderBy('rank_points.point', 'desc')
            ->where('rank_points.type', '=', '0')
            ->where('rank_points.type_id', '=', $month)
            ->limit(10)
            ->get();
        return $student;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getStudentWithRankingByCourse()
    {
        $course = 3;
        $student = DB::table('students')
            ->where('rank_points.type', '=', '1')
            ->where('rank_points.type_id', '=', $course)
            ->join('rank_points', 'students.id', '=', 'rank_points.student_id')
            ->select('students.*', 'rank_points.*')
            ->orderBy('rank_points.point', 'desc')
            ->limit(4)
            ->get();

        return $student;
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
