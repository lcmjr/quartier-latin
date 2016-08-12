<?php

use Illuminate\Database\Seeder;

class SeedContato extends Seeder{
    public function run(){
        DB::table('contato')->insert(array(
            ['telefone' => "(11) 4994 0713",
                'email' => "escola@quartierlatin.com.br",
                'facebook' => "http://facebook.com/quartierlatin",
                'instagram' => "http://instagram.com/quartierlatin",
                'youtube' => "http://youtube.com/quartierlatin",
                'endereco_1' => "Rua Silva Dutra, 60",
                'endereco_2' => "Jardim Bela Vista",
                'endereco_3' => "Santo André - SP",
                'maps' => "<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1536.47092898058!2d-46.53589581018244!3d-23.662925943452368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce428b39ded86f%3A0x6e81fdb75109efbd!2sR.+Silva+Dutra%2C+60+-+Vila+Bastos%2C+Santo+Andr%C3%A9+-+SP%2C+09040-380!5e0!3m2!1spt-BR!2sbr!4v1470762328228\" width=\"1920\" height=\"400\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>"]
        ));
    }
}
