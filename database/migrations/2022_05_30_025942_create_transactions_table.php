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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user');
            $table->foreignId('id_address')->nullable();
            $table->enum('paymet_method', ['COD', 'Bank']);
            $table->enum('status', ['Pending', 'Cancel', 'Shipping', 'Delivered', 'Restock', 'Packing', 'Received']);
            $table->integer('total_price')->nullable();
            $table->integer('total_payment')->nullable();
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_address')->references('id')->on('addresses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
