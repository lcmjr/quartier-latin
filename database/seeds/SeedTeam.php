<?php

use Illuminate\Database\Seeder;

class SeedTeam extends Seeder {
    public function run() {
        DB::table('model_teams')->insert(array(
            ['department_id' => "1",
                'name' => "MARISA BALLARINI",
                'job' => "Nível Intermediário e Avançado",
                'text' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum. </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum.</p>",
                'photo' => "1.jpg"],
            ['department_id' => "2",
                'name' => "ANA CLÁUDIA KUGLER",
                'job' => "Pré Dança e Nível Básico",
                'text' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum. </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum.</p>",
                'photo' => "2.jpg"]));
    }
}
