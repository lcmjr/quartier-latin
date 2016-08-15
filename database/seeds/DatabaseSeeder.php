<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    public function run(){
        $this->call(SeedContato::class);
        $this->call(SeedBanner::class);
        $this->call(SeedCourses::class);
        $this->call(SeedTextPhotos::class);
        $this->call(SeedEvents::class);
    }
}
