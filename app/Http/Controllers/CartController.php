<?php

namespace App\Http\Controllers;

use App\Product;
use App\SalesRule;
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
        $this->updateSalesRule(Cart::couponCode());
        $cart = [
            'totalBefore' => Cart::totalBeforeDiscount(),
            'total' => Cart::total(),
            'discount' => Cart::subtotalDiscount(),
            'couponCode' => Cart::couponCode(),
            'discount_title' => Cart::discountTitle(),
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
     * @param $rowId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeItem($rowId)
    {
        Cart::update($rowId, 0);
        return redirect()->route('cart.index')->with('cart-success', 'Bạn đã xoá sản phẩm khỏi giỏ hàng');
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
            return redirect()->route('cart.index')->with('cart-error', 'Không đủ số lượng hàng trong kho');
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

    public function updateSalesRule($coupon){
        Cart::removeCoupon();
        $rule = $this->getRule($coupon);
        if ($rule) {
            $discount = 0;
            if ($rule->discount_type == 1) {
                $total = Cart::subtotalFloat();
                $discount = $total * $rule->amount / 100;
                $discount = floor($discount);
            } elseif ($rule->discount_type == 2) {
                $discount = $rule->amount;
            }
            Cart::setSubtotalDiscount($discount, $rule->coupon_code, $rule->title);
            return redirect()->route('cart.index')->with('cart-success', 'Bạn đã được hưởng khuyến mại '.$rule->title);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function discount(Request $request)
    {
        if($request->remove){
            Cart::removeCoupon();
            return redirect()->route('cart.index')->with('cart-success', 'Bạn đã gỡ mã giảm giá');
        }
        $validatedData = $request->validate([
            'coupon_code' => 'required'
        ]);
        $total = Cart::subtotalFloat();
        $couponCode = $validatedData['coupon_code'];
        $rule = $this->getRule($couponCode);
        if ($rule) {
            $discount = 0;
            if ($rule->discount_type == 1) {
                $discount = $total * $rule->amount / 100;
                $discount = floor($discount);
            } elseif ($rule->discount_type == 2) {
                $discount = $rule->amount;
            }
            Cart::setSubtotalDiscount($discount, $rule->coupon_code, $rule->title);
            return redirect()->route('cart.index')->with('cart-success', 'Bạn đã sử dụng thành công mã gỉảm giá');
        } else {
            return redirect()->route('cart.index')->with('cart-error', 'Mã giảm giá không hợp lệ. Vui lòng thử lại.');
        }
    }

    public function getRule($code = null)
    {
        $rule = null;
        $total = Cart::subtotalFloat();
        $cartQty = Cart::totalQty();
        $sql = "SELECT * FROM sales_rule WHERE date(`from_date`) <= '".Carbon::today()->toDateTimeString()."' AND date(`to_date`) >= '".Carbon::today()->toDateTimeString()."' AND is_active = 1
AND ((subtotal <= ".$total." AND qty <= ".$cartQty." AND operator = 1) OR ((subtotal <= ".$total." OR qty <=  ".$cartQty.") AND operator = 2))";
        if($code && $code != ''){
            $sql .= "AND coupon_code='" . $code ."'";
        }else{
            $sql .= "AND coupon_code is null";
        }
        $rules = DB::select($sql);
        if($rules && count($rules) > 0){
            $rule = $rules[0];
        }
        return $rule;
    }
}
