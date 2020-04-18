<?php

namespace App\Http\Controllers\Voyager;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
 * Class OrderController
 * @package App\Http\Controllers\Voyager
 */
class OrderController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateStatus(Request $request)
    {
        $ids = json_decode($request->get('ids_order'));
        if (count($ids) > 0) {
            try {
                foreach ($ids as $id) {
                    $order = Order::find($id);
                    if ($order->status != 'paid') {
                        $order->status = 'paid';
                        $order->save();
                        $data = [
                            "name" => $order->customer_name,
                            "order" => $order
                        ];
                        $toEmail = $order->customer_email;
                        Mail::send('emails.sales_order_email', $data, function ($message) use ($toEmail) {
                            $message->to($toEmail)->subject("Đơn hàng thanh toán thành công!");
                        });
                    }
                }
            } catch (\Exception $e) {
                \Log::info($e->getMessage());
                return redirect()->back()->with(['message' => $e->getMessage(), 'alert-type' => 'error']);
            }
        } else {
            return redirect()->back()->with([
                'message' => __('Hãy chọn đơn hàng!'),
                'alert-type' => 'error'
            ]);
        }
        return redirect()->back()->with([
            'message' => __('Update orders status success'),
            'alert-type' => 'success'
        ]);
    }
}
