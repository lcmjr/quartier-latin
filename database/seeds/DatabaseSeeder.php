<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    public function run(){
        $this->call(SeedContato::class);
        $this->call(SeedBanner::class);
        $this->call(SeedCourses::class);
        $this->call(SeedTextPhotos::class);
        $this->call(SeedEvents::class);
        $this->call(SeedTextWithGallery::class);
        $this->call(SeedGalleryFromTexts::class);
        $this->call(SeedDepartment::class);
        $this->call(SeedTeam::class);
        $this->call(SeedQuartierLatin::class);
        $this->call(SeedQuartierLatinGallery::class);
        $this->call(SeedPlie::class);
        $this->call(SeedPoetry::class);
        $this->call(SeedDrawings::class);
    }
}
