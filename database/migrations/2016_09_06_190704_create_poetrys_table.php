<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoetrysTable extends Migration {
    public function up() {
        Schema::create('poetrys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('sub-title', 100);
            $table->text('text-1');
            $table->text('text-2');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('poetrys');
    }
}
