<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelDepartmentsTable extends Migration {
    public function up() {
        Schema::create('model_departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->timestamps();
        });
    }
    public function down() {
        Schema::drop('model_departments');
    }
}
