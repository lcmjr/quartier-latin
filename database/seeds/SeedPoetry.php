<?php

use Illuminate\Database\Seeder;

class SeedPoetry extends Seeder {
    public function run() {
        DB::table('poetrys')->insert(array(
            ['title' => "A Bailarina",
                'sub-title' => 'por: Cecília Meireles',
                'text-1' => "Esta menina<br/>
                            tão pequenina<br/>
                            quer ser bailarina.<br/>
                            —<br/>
                            Não conhece nem dó nem ré<br/>
                            mas sabe ficar na ponta do pé.<br/>
                            —<br/>
                            Não conhece nem mi nem fá<br/>
                            Mas inclina o corpo para cá e para lá.<br/>
                            —–<br/>
                            Não conhece nem lá nem si,<br/>
                            mas fecha os olhos e sorri.<br/>",
                'text-2' => "Roda, roda, roda, com os bracinhos no ar<br/>
                            e não fica tonta nem sai do lugar.<br/>
                            —-<br/>
                            Põe no cabelo uma estrela e um véu<br/>
                            e diz que caiu do céu.<br/>
                            —-<br/>
                            Esta menina<br/>
                            tão pequenina<br/>
                            quer ser bailarina.<br/>
                            —-<br/>
                            Mas depois esquece todas as danças,<br/>
                            e também quer dormir como as outras crianças."
            ]
        ));
    }
}
