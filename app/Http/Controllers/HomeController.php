<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
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
        $month = $this->getStudentWithRankingByMonth();
        $course = $this->getStudentWithRankingByCourse();
        return view('home-page/home', compact('news', 'products','month','course'));
    }
    public function getStudentWithRankingByMonth()
    {
        $month = date('m');
        $student = DB::table('students')
            ->join('rank_points', 'students.id', '=', 'rank_points.student_id')
            ->select('students.*','rank_points.*')
            ->orderBy('rank_points.point','desc')
            ->where('rank_points.type', '=', '0')
            ->where('rank_points.type_id', '=', $month)
            ->limit(10)
            ->get();
        return $student;
    }
    public function getStudentWithRankingByCourse()
    {
        $course = 3;
        $student = DB::table('students')
            ->where('rank_points.type', '=', '1')
            ->where('rank_points.type_id', '=', $course)
            ->join('rank_points', 'students.id', '=', 'rank_points.student_id')
            ->select('students.*','rank_points.*')
            ->orderBy('rank_points.point','desc')
            ->limit(4)
            ->get();

        return $student;
    }

    public function addContactEmail(Request $request)
    {
        print_r(123);die();
        $validatedData = $request->validate([
            'email' => 'required|email'
        ]);
        print_r($validatedData);die();

        try {
            DB::table('contacts')->updateOrInsert(
                ['email' => $validatedData['email']]
            );
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
