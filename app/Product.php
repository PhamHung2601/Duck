<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App
 */
class Product extends Model
{
    /**
     * @var string
     */
    protected $table = 'products';

    /**
     * @param int $productId
     * @return mixed
     */
    public static function getProductInCart($productId = 0)
    {
        return Product::where('products.id', '=', $productId)
            ->select('products.id as productId',
                'products.name as productName',
                'products.price',
                'products.special_price'
            )->get()->first();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsToMany(Category::class,'categories_products');
    }
}
