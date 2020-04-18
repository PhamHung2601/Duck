<?php

namespace App\Http\Controllers\Voyager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        } else {

        }
        return redirect()->back()->with([
            'message' => __('Update orders status success'),
            'alert-type' => 'success'
        ]);
    }
}
