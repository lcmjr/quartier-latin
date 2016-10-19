<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Newsletter extends Migration {
    public function up() {
        Schema::create('model_newsletters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('email', 100);
            $table->string('codigo', 00);
            $table->char('ativo', 1);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('model_newsletters');
    }
}
