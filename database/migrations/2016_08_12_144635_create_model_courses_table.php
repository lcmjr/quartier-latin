<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelCoursesTable extends Migration{
    public function up(){
        Schema::create('model_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('photo', 100);
            $table->text('text');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::drop('model_courses');
    }
}