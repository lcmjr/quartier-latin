<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelQuartierLatinGalleriesTable extends Migration {
    public function up() {
        Schema::create('model_quartier_latin_galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('thumbnail', 100);
            $table->string('photo', 100);
            $table->timestamps();
        });
    }
    public function down() {
        Schema::drop('model_quartier_latin_galleries');
    }
}
