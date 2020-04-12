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
        $this->updateSalesRule(Cart::couponCode());

        $productsInCart = [];

        foreach (Cart::content() as $key => $value) {
            $productsInCart[$value->id] = $value;
        }
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
        foreach (Cart::content() as $value) {
            if (!empty($value->options['is_gift'])) {
                Cart::remove($value->rowId);
            }
        }
        $rules = $this->getRule($coupon);
        if ($rules && count($rules) > 0) {
            $discountTotal = 0;
            $coupon = '';
            $title = '';
            $appliedGift = false;
            foreach ($rules as $rule){
                $discount = 0;
                if ($rule->discount_type == 1) {
                    $total = Cart::subtotalFloat();
                    $discount = $total * $rule->amount / 100;
                    $discount = floor($discount);
                } elseif ($rule->discount_type == 2) {
                    $discount = $rule->amount;
                }
                $discountTotal += (float)$discount;
                if($rule->coupon_code && $rule->coupon_code != ''){
                    $coupon = $rule->coupon_code;
                }
                $title .= $rule->title .', ';
                if ($rule->gift_id && !$appliedGift) {
                    $product = Product::select('id', 'name', 'stock','is_gift')->find($rule->gift_id);
                    if ($product && $product->stock && $product->is_gift) {
                        Cart::add([
                            'id' => $product->id,
                            'name' => $product->name,
                            'qty' => 1,
                            'price' => 0,
                            'weight' => 1,
                            'options' => [
                                'is_gift' => 1
                            ],
                        ]);
                        $appliedGift = true;
                    }
                }
            }
            Cart::setSubtotalDiscount($discountTotal, $coupon, $title);
            return redirect()->route('cart.index')->with('cart-success', 'Bạn đã được hưởng khuyến mại '.$title);
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
        $rules = $this->getRule($couponCode);
        if ($rules && count($rules) > 0) {
            $discountTotal = 0;
            $coupon = '';
            $title = '';
            foreach ($rules as $rule){
                $discount = 0;
                if ($rule->discount_type == 1) {
                    $total = Cart::subtotalFloat();
                    $discount = $total * $rule->amount / 100;
                    $discount = floor($discount);
                } elseif ($rule->discount_type == 2) {
                    $discount = $rule->amount;
                }
                $discountTotal += (float)$discount;
                if($rule->coupon_code && $rule->coupon_code != ''){
                    $coupon = $rule->coupon_code;
                }
                $title .= $rule->title .', ';
            }

            Cart::setSubtotalDiscount($discountTotal, $coupon, $title);
            return redirect()->route('cart.index')->with('cart-success', 'Bạn đã được hưởng khuyến mại '.$rule->title);
        } else {
            return redirect()->route('cart.index')->with('cart-error', 'Mã giảm giá không hợp lệ. Vui lòng thử lại.');
        }
    }

    public function getRule($code = null)
    {
        $total = Cart::subtotalFloat();
        $cartQty = Cart::totalQty();
        $sql = "SELECT * FROM sales_rule WHERE date(`from_date`) <= '".Carbon::today()->toDateTimeString()."' AND date(`to_date`) >= '".Carbon::today()->toDateTimeString()."' AND is_active = 1
AND ((subtotal <= ".$total." AND qty <= ".$cartQty." AND operator = 1) OR ((subtotal <= ".$total." OR qty <=  ".$cartQty.") AND operator = 2))";
        if($code && $code != ''){
            $sql .= "AND (coupon_code='" . $code ."' OR coupon_code is null)";
        }else{
            $sql .= "AND coupon_code is null";
        }
        $rules = DB::select($sql);
        return $rules;
    }
}
