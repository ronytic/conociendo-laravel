<?php

namespace App\Models;

use App\Models\BuyProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id_product';


    public function buyProducts()
    {
        return $this->hasMany(BuyProduct::class, 'id_product', 'id_product');
    }

    public function saleDetails()
    {
        return $this->hasMany(SaleDetail::class, 'id_product', 'id_product');
    }
}
