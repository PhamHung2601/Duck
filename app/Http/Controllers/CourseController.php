<?php

namespace App\Http\Controllers;

use App\CourseRegister;
use App\Http\Requests\CourseRegisterRequest;
use Illuminate\Support\Facades\Session;

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
//        try {
//            $toEmail = $request->email;
//            $data = [
//                "name" => $request->name,
//                "body" => "Body"
//            ];
//            Mail::send('emails.course_registered_email', $data, function ($message) use ($toEmail) {
//                $message->to($toEmail)->subject("Thanks for registration");
//            });
//        } catch (\Exception $e) {
//            \Log::info($e->getMessage());
//        }
        Session::put('register-success', 'Bạn đã đăng ký email thành công');
        return redirect()->back()->with([
            'message' => __('Bạn đã đăng ký email thành công'),
            'alert-type' => 'success'
        ]);

    }

}
