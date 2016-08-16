<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryFromTextsTable extends Migration{
    public function up(){
        Schema::create('gallery_from_texts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo', 100);
            $table->timestamps();
        });
        Schema::table('gallery_from_texts', function ($table) {
            $table->integer('text_with_galleries_id')->unsigned();
            $table->foreign('text_with_galleries_id')->references('id')->on('text_with_galleries');
        });
    }

    public function down(){
        Schema::drop('gallery_from_texts');
    }
}
