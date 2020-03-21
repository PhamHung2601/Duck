<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $productsInCart=array();

        foreach (Cart::content() as $key => $value) {
            $productsInCart[$value->id]=Product::getProductInCart($value->id);
        }

        return view('layouts.cart',['products' => $productsInCart]);
    }
    public function addCart(Request $request)
    {
        $product=Product::select('id','name','price','special_price','stock')->find($request->productId);
        // dd($book);
        if (!isset($product)) {
            return 'Có lỗi xảy ra';
        }
        if ($product->stock<$request->qty) {
            return 'Không đủ hàng để cung cấp';
        }
        $price = $product->price;
        if($product->special_price && $product->special_price > $product->price){
            $price = $product->special_price;
        }
        Cart::add([
            'id'        => $product->id,
            'name'      => $product->name,
            'qty'       => (int)$product->stock,
            'price'     => $price,
            // 'options'   =>['book_image' => $book->book_image]
        ]);
        // dd(Cart::content());
        return redirect()->route('cart.index');
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCart(Request $request)
    {
        foreach ($request->rowIds as $rowId => $qty) {
            $id=Cart::get($rowId)->id;
            $product=Product::select('stock')->find($id);
            if ($product->stock<$qty) {
                return 'Không đủ số lượng hàng trong kho';
            }
            Cart::update($rowId, $qty);
        }
        return redirect()->route('cart.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }
}
