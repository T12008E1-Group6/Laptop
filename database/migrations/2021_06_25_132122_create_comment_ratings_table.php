<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('product_id');
            $table->foreignId('user_id')->constrained('users');
            $table->text('comment_contents');
            $table->unsignedInteger('rating_points');
            $table->string('status');
            $table->timestamps();
            $table->foreign('product_id')->references('product_id')->on('tbl_product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_ratings');
    }
}
