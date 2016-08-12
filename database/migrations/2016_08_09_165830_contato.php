<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contato extends Migration{
    private $tabela = "contato";

    public function up(){
        Schema::create($this->tabela, function (Blueprint $table) {
            $table->increments('id');
            $table->string('telefone', 15);
            $table->string('email', 100);
            $table->string('facebook', 200);
            $table->string('instagram', 200);
            $table->string('youtube', 200);
            $table->string('endereco_1', 100);
            $table->string('endereco_2', 100);
            $table->string('endereco_3', 100);
            $table->text('maps');
        });
    }

    public function down(){
       Schema::drop($this->tabela);
    }
}
