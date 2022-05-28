<?php

namespace App\Models;

use App\Models\BuyProduct;
use Illuminate\Http\Request;
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

    public static function storeProduct(Request $request)
    {
        $product = new Product();

        $product->name = $request->input('name');
        $product->price = $request->input('price', 0);
        $product->detail = $request->input('detail', '');
        $product->photo = $request->input('photo', '');
        $product->state = 1;

        $product->save();   // metodo que guarda dentro de la tabla
    }
}
