<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_products', function (Blueprint $table) {
            $table->id('id_buy_product');
            $table->unsignedBigInteger('id_product');
            $table->integer('quantity');
            $table->tinyInteger('state');
            $table->timestamps();

            $table->foreign('id_product')->references('id_product')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('buy_products');
        Schema::enableForeignKeyConstraints();
    }
}
