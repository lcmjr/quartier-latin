<?php

namespace App\Http\Controllers;

use App\class_animate;
use App\ModelContato;
use App\ModelEvents;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerEvents extends Controller{
    public function page(){
        $dados_contato = ModelContato::dados_contato();
        $posts = Post::posts_blog();
        $class_animate_y = class_animate::get_animate();
        $events = ModelEvents::page_data();
        return view('calendario')->with('class_animate_y',$class_animate_y)->with('dados_contato',$dados_contato)->with("posts",$posts)->with("events",$events);
    }
}
