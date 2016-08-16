<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextWithGalleriesTable extends Migration{
    public function up(){
        Schema::create('text_with_galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->text('text');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::drop('text_with_galleries');
    }
}
