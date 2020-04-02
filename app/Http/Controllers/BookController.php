<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;
use Illuminate\Http\Request;

/**
 * Class CheckoutController
 * @package App\Http\Controllers
 */
class BookController extends Controller
{
    /**
     * CheckoutController constructor.
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function index($id)
    {
        if ($id) {
            $product = Product::select('*')->find($id);
            return view('book/detail', ['product' => $product]);
        }

        return Redirect('home');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list(Request $request)
    {
        $sortBy = $request->sortBy;
        $options = [
            'id_desc' => 'Mới nhất',
            'id_asc' => 'Cũ nhất',
            'name_asc' => 'Theo bảng chữ cái từ A-Z',
            'name_desc' => 'Theo bảng chữ cái từ Z-A',
            'price_asc' => 'Giá từ thấp tới cao',
            'price_desc' => 'Giá từ cao tới thấp'
        ];
        $sortBy = $sortBy && isset($options[$sortBy]) ? $sortBy : 'id_desc';
        list ($sort,$dir) = explode('_',$sortBy);
        $products = Product::orderBy($sort, $dir)->paginate(12);
        return view('book/list', [
            'products' => $products,
            'options' => $options,
            'sortBy' => $sortBy
        ]);
    }

}
