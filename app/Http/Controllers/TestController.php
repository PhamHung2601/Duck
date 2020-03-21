<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Test;

/**
 * Class TestController
 * @package App\Http\Controllers
 */
class TestController extends Controller
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
        $tests = DB::table('tests')->get();
        $testList = [];
        foreach ($tests as $test) {
            if (!isset($testList[$test->year])) {
                $testList[$test->year] = [];
            }
            $testList[$test->year][] = $test;
        }
        return view('test.list', ['testList' => $testList]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|string
     */
    public function view(Request $request,$id)
    {
        $test = Test::select('id', 'title', 'description', 'link', 'year')->find($id);
        if (!isset($test)) {
            return 'Đề thi không tồn tại';
        }
        return view('test.view', ['test' => $test]);
    }

}
