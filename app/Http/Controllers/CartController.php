<?php

namespace App\Http\Controllers;

use App\Product;
use Carbon\Carbon;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class CartController
 * @package App\Http\Controllers
 */
class CartController extends Controller
{
    /**
     * CartController constructor.
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $productsInCart = [];

        foreach (Cart::content() as $key => $value) {
            $productsInCart[$value->id] = $value;
        }
        $cart = [
            'totalBefore' => Cart::totalBeforeDiscount(),
            'total' => Cart::total(),
            'discount' => Cart::subtotalDiscount(),
            'couponCode' => Cart::couponCode(),
            'shippingFee' => Cart::shippingFee(),
        ];
        return view('layouts.cart', ['products' => $productsInCart, 'cart' => $cart]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|string
     */
    public function addCart(Request $request)
    {
        $productId = $request->product_id;
        $product = Product::select('id', 'name', 'price', 'special_price', 'stock')->find($productId);
        if (!isset($product)) {
            return 'Có lỗi xảy ra';
        }
        if ($product->stock < $request->qty) {
            return 'Không đủ hàng để cung cấp';
        }
        $price = $product->price;
        if ($product->special_price && $product->special_price < $product->price) {
            $price = $product->special_price;
        }
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $price,
            'weight' => 1
        ]);
        return redirect()->route('cart.index');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|string
     */
    public function updateCart(Request $request)
    {
        foreach ($request->rowIds as $rowId => $qty) {
            $id = Cart::get($rowId)->id;
            $product = Product::select('stock')->find($id);
            if ($product->stock < $qty) {
                return redirect()->route('cart.index')->with('error','Không đủ số lượng hàng trong kho');
            }
            Cart::update($rowId, $qty);
        }
        return redirect()->route('cart.index');
    }

    /**
     * @param $rowId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeItem($rowId)
    {
        Cart::update($rowId, 0);
        return redirect()->route('cart.index')->with('success','Bạn đã xoá sản phẩm khỏi giỏ hàng');
    }

    /**
     * @param Request $request
     * @param $rowId
     * @return \Illuminate\Http\RedirectResponse|string
     */
    public function updateCartItem(Request $request, $rowId)
    {
        $item = Cart::get($rowId);
        $increment = $request->increment;
        if ($increment == 1) {
            $qty = $item->qty + 1;
        } else {
            $qty = $item->qty - 1;
        }
        $product = Product::select('stock')->find($item->id);
        if ($product->stock < $qty) {
            return redirect()->route('cart.index')->with('error','Không đủ số lượng hàng trong kho');
        }
        Cart::update($rowId, $qty);
        return redirect()->route('cart.index');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function discount(Request $request)
    {
        $validatedData = $request->validate([
            'coupon_code' => 'required'
        ]);
        $total = Cart::total();
        $cartQty = Cart::totalQty();
        $couponCode = $validatedData['coupon_code'];
        $rules = DB::table('sales_rule')
            ->where('coupon_code', '=', $couponCode)
            ->whereDate('from_date', '<=', Carbon::today()->toDateString())
            ->whereDate('to_date', '>=', Carbon::today()->toDateString())
            ->where('is_active','=', 1)
            ->where('subtotal','<=',$total)
            ->where('qty','<=',$cartQty)
            ->limit(1)
            ->get();
        if (count($rules) > 0) {
            $rule = $rules[0];
            $discount = 0;
            if ($rule->discount_type == 1) {
                $discount = $total * $rule->amount / 100;
                $discount = floor($discount);
            } elseif ($rule->discount_type == 2) {
                $discount = $rule->amount;
            }
            Cart::setSubtotalDiscount($discount,$rule->coupon_code,$rule->title);
            return redirect()->route('cart.index')->with('success','Bạn đã sử dụng thành công mã gỉảm giá');
        }else{
            return redirect()->route('cart.index')->with('error','Mã giảm giá không hợp lệ. Vui lòng thử lại.');
        }
    }

    /**
     * @param $coupon
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeCoupon($coupon)
    {
        Cart::removeCoupon();
        return redirect()->route('cart.index');
    }
}
