<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelQuartierLatinsTable extends Migration {
    public function up() {
        Schema::create('model_quartier_latins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->text('text');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::drop('model_quartier_latins');
    }
}
