<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function index($id, $slug)
    {
        if ($id) {
            $product = Product::select('*')->find($id);
            // get reviews
            $reviews = DB::table('review')
                ->where('review.is_approved', '=', '1')
                ->where('review_product.product_id', '=', $id)
                ->join('review_product', 'review.id', '=', 'review_product.review_id')
                ->select('review.*')
                ->orderBy('review.id', 'desc')
                ->limit(4)
                ->get();
            return view('book/detail', [
                'product' => $product,
                'reviews' => $reviews
            ]);
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
        list ($sort, $dir) = explode('_', $sortBy);
        $products = Product::orderBy($sort, $dir)->paginate(12);
        return view('book/list', [
            'products' => $products,
            'options' => $options,
            'sortBy' => $sortBy
        ]);
    }

}
