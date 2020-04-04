<?php

namespace App\Http\Controllers;

use App\CourseRegister;
use App\SalesRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

/**
 * Class MailController
 * @package App\Http\Controllers
 */
class MailController extends Controller
{
    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendEmailRegister($id)
    {
        $register = CourseRegister::find($id);
        try {
            $toEmail = $register->email;
            $data = [
                "name" => $register->name,
                "body" => "Body"
            ];
            Mail::send('emails.course_registered_email', $data, function ($message) use ($toEmail) {
                $message->to($toEmail)->subject("Thanks for registration");
            });
            $register->sent_email = 1;
            $register->save();
            return redirect()->back()->with(['message' => "Send email success for {$register->name}.", 'alert-type' => 'success']);
        } catch (\Exception $e) {
            \Log::info($e->getMessage());
            return redirect()->back()->with(['message' => $e->getMessage(), 'alert-type' => 'error']);
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendEmailSalesRule($id)
    {
        $salesRule = SalesRule::find($id);
        try {
            if(!empty($salesRule) && !empty($salesRule->id)) {
                foreach (CourseRegister::all() as $register){
                    $toEmail = $register->email;
                    $data = [
                        "name" => $register->name,
                        "coupon" => $salesRule->coupon_code,
                        "body" => "Body"
                    ];
                    Mail::send('emails.sales_rule_email', $data, function ($message) use ($toEmail) {
                        $message->to($toEmail)->subject("Sales rule subject");
                    });
                }
                $salesRule->sent_email = 1;
                $salesRule->save();
            }
            return redirect()->back()->with(['message' => "Send sale rule success for {$salesRule->title}.", 'alert-type' => 'success']);
        } catch (\Exception $e) {
            \Log::info($e->getMessage());
            return redirect()->back()->with(['message' => $e->getMessage(), 'alert-type' => 'error']);
        }
    }
}
