<?php

use Illuminate\Database\Seeder;

class SeedTextPhotos extends Seeder{
    public function run(){
        DB::table('model_text_photos')->insert(array(
            ['title' => "DISCIPLINA PARA A VIDA",
                'photo' => "1.jpg",
                'text' => "<p>Muito mais do que formar bailarinos, nós, do Quartier Latin, temos, como principal meta, educar através da dança, transformar através da Arte.</p><p>Observamos a Arte num sentido maior, como mecanismo de autoconhecimento.</p>"],
            ['title' => "FORMAÇÃO DANÇA CLÁSSICA",
                'photo' => "2.jpg",
                'text' => "<p>O QUARTIER LATIN é uma escola de ballet clássico que exercita a dança acadêmica com visão contemporânea, adaptando técnica e metodologias internacionais para mentes e corpos brasileiros. Estimula o artístico e a criação. Uma visão renovada que garante motivação a longa e árdua rotina dos estudantes de ballet.</p>"]
        ));
    }
}