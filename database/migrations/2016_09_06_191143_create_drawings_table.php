<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrawingsTable extends Migration {

    public function up() {
        Schema::create('drawings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('thumbnail', 100);
            $table->string('full', 100);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('drawings');
    }
}
