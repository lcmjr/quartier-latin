<?php

use Illuminate\Database\Seeder;

class SeedCourses extends Seeder{
    public function run(){
        DB::table('model_courses')->insert(array(
            ['title' => "BALLET CLÁSSICO PRÉ DANÇA",
                'photo' => "3.jpg",
                'text' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum.</p>"],
            ['title' => "BALLET CLÁSSICO BÁSICO",
                'photo' => "4.jpg",
                'text' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum.</p>"],
            ['title' => "BALLET CLÁSSICO INTERMEDIÁRIO e AVANÇADO",
                'photo' => "5.jpg",
                'text' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum massa nec mauris varius elementum.</p>"]
        ));
    }
}