<?php

namespace App\Http\Controllers;

use App\class_animate;
use App\ModelBanner;
use App\ModelContato;
use App\ModelCourses;
use App\ModelEvents;
use App\ModelTextPhoto;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerHome extends Controller{
    public function page(){
        $dados_contato = ModelContato::dados_contato();
        $banner = ModelBanner::all();
        $text_photo = ModelTextPhoto::find(1);
        $courses = ModelCourses::take(3)->get();
        $class_animate_y = class_animate::get_animate();
        $posts = Post::posts_blog();
        $events = ModelEvents::section_events();
        return view('home')->with('class_animate_y',$class_animate_y)->with('dados_contato',$dados_contato)->with("banners",$banner)->with("text_photo",$text_photo)->with("courses",$courses)->with("posts",$posts)->with("events",$events);
    }
}
