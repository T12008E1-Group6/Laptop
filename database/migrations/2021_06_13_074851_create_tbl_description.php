<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDescription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_description', function (Blueprint $table) {
            $table->increments('description_id');
            $table->integer('product_id');
            $table->integer('brand_id');
            $table->string('desc_guarantee');
            $table->string('desc_warranty');
            $table->string('desc_color');
            $table->string('desc_serieslaptop');
            $table->string('desc_partnumber');
            $table->string('desc_CPUgeneration');
            $table->string('desc_CPU');
            $table->string('desc_card');
            $table->string('desc_ram');
            $table->string('desc_screen');
            $table->string('desc_storage');
            $table->string('desc_maxstorage');
            $table->string('desc_supported');
            $table->string('desc_output');
            $table->string('desc_connector');
            $table->string('desc_wireless');
            $table->string('desc_keyboard');
            $table->string('desc_window');
            $table->string('desc_size');
            $table->string('desc_battery');
            $table->string('desc_weight');
            $table->string('desc_security');
            $table->string('desc_accessories');
            $table->string('desc_led');
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
        Schema::dropIfExists('tbl_description');
    }
}
