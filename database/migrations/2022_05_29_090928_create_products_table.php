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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("brand_id");
            $table->enum("catalog", ["Smartphone", "Accessories"]);
            $table->string("name");
            $table->string("des_Dimensions");
            $table->string("des_Display");
            $table->string("des_OS");
            $table->string("des_Chipset");
            $table->string("des_CPU");
            $table->string("des_memory");
            $table->string("des_battery");
            $table->text("short_description");
            $table->integer("price");
            $table->integer("stock");
            $table->integer("discount");
            $table->string("image");
            $table->timestamps();
            $table->foreign('brand_id')->references('id')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
