<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_options', function (Blueprint $table) {
            $table->id();

            $table->string('variation_name')->nullable();
            $table->string('weight')->nullable();
            $table->double('main_price', 8, 2 );
            $table->double('regular_price', 8, 2 )->nullable();
            $table->double('super_buyer_price', 8, 2 )->nullable();
            $table->string('product_id')->nullable();

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
        Schema::dropIfExists('product_options');
    }
}
