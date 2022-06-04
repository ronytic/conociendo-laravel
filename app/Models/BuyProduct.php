<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyProduct extends Model
{
    use HasFactory;

    protected $table = 'buy_products';
    protected $primaryKey = 'id_buy_product';

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }

    public static function storeBuyProduct($id_product, $quantity)
    {
        $buyProduct = new BuyProduct();

        $buyProduct->id_product = $id_product;
        $buyProduct->quantity = $quantity;
        $buyProduct->state = 1;

        $buyProduct->save();

        return $buyProduct;
    }
}
