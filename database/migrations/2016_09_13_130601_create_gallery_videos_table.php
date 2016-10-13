<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryVideosTable extends Migration {
    public function up() {
        Schema::create('gallery_videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('thumbnail', 100);
            $table->string('title', 100);
            $table->string('desc', 100);
            $table->string('video', 100);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('gallery_videos');
    }
}
