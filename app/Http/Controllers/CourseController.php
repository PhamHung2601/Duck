<?php

namespace App\Http\Controllers;

use App\CourseRegister;
use App\Http\Requests\CourseRegisterRequest;

/**
 * Class CourseController
 * @package App\Http\Controllers
 */
class CourseController extends Controller
{
    /**
     * @param CourseRegister $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function register(CourseRegisterRequest $request)
    {
        $validated = $request->validated();
        CourseRegister::create($validated);
        return redirect('/courses/list/offline')->with('success', 'Bạn đã đăng ký email thành công');

    }
}
