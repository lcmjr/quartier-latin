<?php

use Illuminate\Database\Seeder;

class SeedDrawings extends Seeder {
    public function run() {
        DB::table('drawings')->insert(array(
            ['thumbnail' => "1-t.jpg",
                'full' => '1.jpg'],
            ['thumbnail' => "2-t.jpg",
                'full' => '2.jpg'],
            ['thumbnail' => "3-t.jpg",
                'full' => '3.jpg'],
            ['thumbnail' => "1-t.jpg",
                'full' => '1.jpg'],
            ['thumbnail' => "2-t.jpg",
                'full' => '2.jpg'],
            ['thumbnail' => "3-t.jpg",
                'full' => '3.jpg']
        ));
    }
}