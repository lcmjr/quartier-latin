<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelContato extends Model{
    protected $table = 'contato';
    public static function dados_contato(){
        return self::get(['telefone','facebook','instagram','youtube','email','endereco_1','endereco_2','endereco_3']);
    }
}