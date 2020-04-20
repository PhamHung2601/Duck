<?php

namespace App\Http\Controllers;

use App\Document;
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
        $documents = Document::orderBy('position','desc')->get();
        $tests = Test::all();
        $testList = [];
        foreach ($tests as $test) {
            if (!isset($testList[$test->year])) {
                $testList[$test->year] = [];
            }
            $testList[$test->year][] = $test;
        }
        return view('test.list', ['testList' => $testList],compact('test','documents'));
    }

    /**
     * @param Request $request
     * @param $id
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function show(Request $request, $id)
    {
        $test = Test::select('*')->find($id);
        if (!isset($test)) {
            return Redirect('/');
        }
        return view('test.view', ['test' => $test]);
    }

}
