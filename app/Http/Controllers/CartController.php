<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

use Cart;

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
            $productsInCart[$value->id] = Product::getProductInCart($value->id);
        }

        return view('layouts.cart', ['products' => $productsInCart]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|string
     */
    public function addCart(Request $request)
    {
        $product = Product::select('id', 'name', 'price', 'special_price', 'stock')->find($request->productId);
        if (!isset($product)) {
            return 'Có lỗi xảy ra';
        }
        if ($product->stock < $request->qty) {
            return 'Không đủ hàng để cung cấp';
        }
        $price = $product->price;
        if ($product->special_price && $product->special_price > $product->price) {
            $price = $product->special_price;
        }
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => (int)$product->stock,
            'price' => $price,
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
                return 'Không đủ số lượng hàng trong kho';
            }
            Cart::update($rowId, $qty);
        }
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
}
