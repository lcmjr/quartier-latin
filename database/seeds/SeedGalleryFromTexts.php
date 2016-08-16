<?php

use Illuminate\Database\Seeder;

class SeedGalleryFromTexts extends Seeder{
    public function run(){
        DB::table('gallery_from_texts')->insert(array(
            ['text_with_galleries_id' => "1",
                'photo' => "1.jpg"],
            ['text_with_galleries_id' => "1",
                'photo' => "1.jpg"],
            ['text_with_galleries_id' => "2",
                'photo' => "2.jpg"],
            ['text_with_galleries_id' => "2",
                'photo' => "3.jpg"],
            ['text_with_galleries_id' => "2",
                'photo' => "4.jpg"],
            ['text_with_galleries_id' => "2",
                'photo' => "5.jpg"],
        ));
    }
}
