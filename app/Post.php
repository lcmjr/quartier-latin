<?php

namespace App;

use Corcel\Post as Corcel;

class Post extends Corcel {
    protected $connection = 'wordpress';
    public static function posts_blog(){
        $posts = self::orderBy('id', 'DESC')->type("post")->status('publish')->take(4)->get();
        foreach ($posts as $post) {
            $wp_post[] = array(
                'title' => $post->post_title,
                'image' => str_replace(".jpg",'-230x160.jpg',$post->thumbnail->attachment->guid),
                'link' => $post->guid);
        }
        return $wp_post;
    }
}
