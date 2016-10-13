<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryPhotosTable extends Migration {
    public function up() {
        Schema::create('gallery_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('thumbnail', 100);
            $table->string('title', 100);
            $table->string('photo', 100);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('gallery_photos');
    }
}
