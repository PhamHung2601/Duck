<?php

namespace App\Http\Controllers;

use App\CourseRegister;
use App\Http\Requests\CourseRegisterRequest;
use Illuminate\Support\Facades\Mail;

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
        try {
            $toEmail = $request->email;
            $data = [
                "name" => $request->name,
                "body" => "Body"
            ];
            Mail::send('emails.course_registered_email', $data, function ($message) use ($toEmail) {
                $message->to($toEmail)->subject("Thanks for registration");
            });
        } catch (\Exception $e) {
            \Log::info($e->getMessage());
        }
        return redirect('/courses/list/offline')->with('success', 'Bạn đã đăng ký email thành công');

    }

    /**
     * @param $id
     */
    public function sendEmail($id)
    {
        $student = CourseRegister::find($id);
        try {
            $toEmail = $student->email;
            $data = [
                "name" => $student->name,
                "body" => "Body"
            ];
            Mail::send('emails.course_registered_email', $data, function ($message) use ($toEmail) {
                $message->to($toEmail)->subject("Thanks for registration");
            });
        } catch (\Exception $e) {
            \Log::info($e->getMessage());
        }
    }
}
