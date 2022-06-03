<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hot_deal_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_hot_deal');
            $table->foreignId('id_product');
            $table->integer('price');
            $table->integer('discount');
            $table->timestamps();
            $table->foreign('id_hot_deal')->references('id')->on('hot_deals');
            $table->foreign('id_product')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hot_deal_details');
    }
};
