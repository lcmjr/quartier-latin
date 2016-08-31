<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelTeamsTable extends Migration {
    public function up() {
        Schema::create('model_teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('job', 100);
            $table->string('photo', 100);
            $table->text('text');
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('model_teams');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::drop('model_teams');
    }
}