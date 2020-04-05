<?php

namespace App\Http\Controllers;

use App\Contact;
use App\CourseRegister;
use App\SalesRule;
use Illuminate\Support\Facades\Mail;

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
                "link" => 'https://youtube.com'
            ];
            Mail::send('emails.course_registered_email', $data, function ($message) use ($toEmail) {
                $message->to($toEmail)->subject("Thanks for registration");
            });
            $register->sent_email = 1;
            $register->save();
            return redirect()->back()->with([
                'message' => "Send email success for {$register->name}.",
                'alert-type' => 'success'
            ]);
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
            if (!empty($salesRule) && !empty($salesRule->id)) {
                foreach (Contact::all() as $register) {
                    $toEmail = $register->email;
                    $data = [
                        "name" => $register->name,
                        "coupon" => $salesRule->coupon_code
                    ];
                    Mail::send('emails.sales_rule_email', $data, function ($message) use ($toEmail) {
                        $message->to($toEmail)->subject("Sales rule subject");
                    });
                }
                $salesRule->sent_email = 1;
                $salesRule->save();
            }
            return redirect()->back()->with([
                'message' => "Send sale rule success for {$salesRule->title}.",
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {
            \Log::info($e->getMessage());
            return redirect()->back()->with(['message' => $e->getMessage(), 'alert-type' => 'error']);
        }
    }
}
