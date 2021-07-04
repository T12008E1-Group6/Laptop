<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblGallery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_gallery', function (Blueprint $table) {
            $table->increments('gallery_id');
            $table->string('gallery_name');
            $table->string('gallery_image');
            $table->unsignedInteger('product_id'); //edit by Quang Thành
            $table->timestamps();
            $table->foreign('product_id')->references('product_id')->on('tbl_product')->onDelete('cascade'); //edit by Quang Thành
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_gallery');
    }
}
