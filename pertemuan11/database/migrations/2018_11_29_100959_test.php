<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Test extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('master_transaction', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_invoice');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('detail_transaction_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('transaction_id');
            $table->string('product_id');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('master_product');
        Schema::drop('master_transaction');
        Schema::drop('detail_transaction_detail');
    }
}
