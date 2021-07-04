<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->unsignedInteger('category_id');  //edit by Quang Thành
            $table->unsignedInteger('brand_id');  //edit by Quang Thành
            $table->text('product_desc');
            $table->text('product_content');
            $table->integer('product_price');
            $table->string('product_image');
            $table->integer('product_amount');
            $table->text('product_name');
            $table->timestamps();
            $table->foreign('category_id')->references('category_id')->on('tbl_category_product'); //edit by Quang Thành
            $table->foreign('brand_id')->references('brand_id')->on('tbl_brand'); //edit by Quang Thành
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_product');
    }
}
