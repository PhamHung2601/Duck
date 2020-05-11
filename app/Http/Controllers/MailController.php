<?php

namespace App\Http\Controllers;

use App\Contact;
use App\CourseRegister;
use App\SalesRule;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/**
 * Class MailController
 * @package App\Http\Controllers
 */
class MailController extends Controller
{
    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Throwable
     */
    public function sendEmailRegister($id)
    {
        $register = CourseRegister::find($id);
        try {
            $link = 'https://youtube.com';
            $body = view('emails.course_registered_email', compact('link'))->render();
            $this->sendEmail($register->email, $register->name, "Thanks for registration", $body);
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
     * @throws \Throwable
     */
    public function sendEmailSalesRule($id)
    {
        $salesRule = SalesRule::find($id);
        try {
            if (!empty($salesRule) && !empty($salesRule->id)) {
                foreach (Contact::all() as $register) {
                    $name = $register->name;
                    $coupon = $salesRule->coupon_code;
                    $body = view('emails.sales_rule_email', compact('name', 'coupon'))->render();
                    $this->sendEmail($register->email, $name, "Sales rule subject", $body);
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

    /**
     * @param $toEmail
     * @param $name
     * @param $subject
     * @param $body
     * @return bool
     */
    public function sendEmail($toEmail, $name, $subject, $body)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->CharSet = 'utf-8';
            $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'dialithaytung@gmail.com';
            $mail->Password = 'yeudia123';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            //Recipients
            $mail->setFrom('dialithaytung@gmail.com', 'Thầy Tùng');
            $mail->addReplyTo('dialithaytung@gmail.com', 'Information');
            $mail->addAddress($toEmail, $name);
            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            return true;
        } catch (Exception $e) {
            \Log::info($e->getMessage());
            \Log::info($mail->ErrorInfo);
            return false;
        }
    }
}
