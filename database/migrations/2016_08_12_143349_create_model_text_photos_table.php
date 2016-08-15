<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelTextPhotosTable extends Migration{
    public function up(){
        Schema::create('model_text_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('photo', 100);
            $table->text('text');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::drop('model_text_photos');
    }
}