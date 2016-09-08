<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePliesTable extends Migration {
    public function up() {
        Schema::create('plies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('sub-title', 100);
            $table->string('title-2', 100);
            $table->text('text');
            $table->string('title-3', 100);
            $table->string('youtube', 100);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('plies');
    }
}
