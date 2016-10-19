<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelContato extends Model{
    protected $table = 'contato';
    public static function dados_contato(){
        return self::get(['telefone','facebook','instagram','youtube','email','endereco_1','endereco_2','endereco_3']);
    }

    public static function contact_page_data(){
        return self::get(['telefone','label_facebook','label_instagram','label_youtube','facebook','instagram','youtube','maps','email','endereco_1','endereco_2','endereco_3']);
    }
}