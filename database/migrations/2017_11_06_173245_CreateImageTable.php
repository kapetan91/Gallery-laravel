<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('images', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('description');
        $table->string('image_url');
        $table->unsignedInteger('gallery_id');
        $table->timestamps();
        $table->foreign('gallery_id')->references('id')->on('galleries')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
