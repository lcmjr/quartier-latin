<?php

use Illuminate\Database\Seeder;

class SeedDepartment extends Seeder{
    public function run() {
        DB::table('model_departments')->insert(array(
            ['name' => "DIREÇÃO"],
            ['name' => "COORDENAÇÃO"]));
    }
}