<?php

use Illuminate\Database\Seeder;

class SeedPlie extends Seeder {
    public function run() {
        DB::table('plies')->insert(array(
            ['title' => "PLIÉ",
                'sub-title' => 'Curiosidades, diversão e ballet. ',
                'title-2' => "Você sabia?",
                'text' => "<p>O breu é uma substância proveniente do carvão, utilizada por bailarinos para evitar escorregões. É amplamente usado nas aulas de ponta.</p>",
                'title-3' => "Pipoca e cia",
                'youtube' => "https://www.youtube.com/watch?v=Q0oIoR9mLwc"
            ]
        ));
    }
}
