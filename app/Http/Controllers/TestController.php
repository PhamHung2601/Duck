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
        $testList = Test::orderBy('created_at','desc')->paginate(10);

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
        $documents= Document::orderBy('id','desc')->get();
        $test = Test::select('*')->find($id);
        if (!isset($test)) {
            return Redirect('/');
        }
        return view('test.view', ['test' => $test],['documents'=>$documents]);
    }

}
