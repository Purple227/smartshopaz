<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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

            $table->string('title');
            $table->integer('discount')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('brand')->nullable();
            $table->double('main_price', 8, 2 );
            $table->double('regular_price', 8, 2 )->nullable();
            $table->double('super_buyer_price', 8, 2 )->nullable();
            $table->integer('weight')->nullable();
            $table->string('description');
            $table->string('image')->nullable();
            $table->string('variation_name')->nullable();

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
        Schema::dropIfExists('products');
    }
}
