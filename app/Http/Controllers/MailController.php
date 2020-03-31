<?php

namespace App\Http\Controllers;

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
     * @return string
     */
    public function mail()
    {
//        $name = 'Krunal';
//        Mail::to('sam@tigren.com')->send(new SendMailable($name));
        $toEmail = "sam@tigren.com";
        $data = [
            "name" => "Pham",
            "body" => "Body"
        ];
        Mail::send('emails.mail', $data, function ($message) use ($toEmail) {
            $message->to($toEmail)->subject("test subject email");
        });
        return 'Email was sent';
    }
}
