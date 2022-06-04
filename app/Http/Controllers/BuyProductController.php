<?php

namespace App\Http\Controllers;

use App\Http\Resources\BuyProductCollection;
use App\Http\Resources\BuyProductResource;
use App\Models\BuyProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // DB::enableQueryLog();
        $buyProducts = BuyProduct::where('state', 1)->get();
        // dd(DB::getQueryLog());

        // $dataResponse = [
        //     'status' => 'success',
        //     'data' => $buyProducts,
        // ];
        // return response()->json($dataResponse);
        return new BuyProductCollection($buyProducts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_product = $request->input('id_product');
        $quantity = $request->input('quantity');

        $buyProduct = BuyProduct::storeBuyProduct($id_product, $quantity);

        return new BuyProductResource($buyProduct);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BuyProduct $product)
    {
        // $dataResponse = [
        //     'status' => 'success',
        //     'data' => $product,
        // ];
        // return response()->json($dataResponse);

        return new BuyProductResource($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuyProduct $product)
    {
        $id_product = $request->input('id_product');
        $quantity = $request->input('quantity');

        $product->id_product = $id_product;
        $product->quantity = $quantity;
        $product->save();

        return new BuyProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuyProduct $product)
    {
        $product->state = 0;
        $product->save();

        return new BuyProductResource($product);
    }
}
