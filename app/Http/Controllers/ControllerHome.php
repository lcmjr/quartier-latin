<?php

namespace App\Http\Controllers;

use App\ModelBanner;
use App\ModelContato;
use App\ModelCourses;
use App\ModelEvents;
use App\ModelTextPhoto;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerHome extends Controller{
    public function page(){
        $dados_contato = ModelContato::dados_contato();
        $banner = ModelBanner::all();
        $text_photo = ModelTextPhoto::find(1);
        $courses = ModelCourses::take(3)->get();
        $posts[0]['title'] = "Como cuidar de sua sapatilha";
        $posts[0]['image'] = "1.jpg";
        $posts[0]['link'] = "#";
        $posts[1]['title'] = "Praticando o ballte durante a gravidez";
        $posts[1]['image'] = "2.jpg";
        $posts[1]['link'] = "#";
        $posts[2]['title'] = "Quartier Latin no Teatro Municipal de Santo André";
        $posts[2]['image'] = "3.jpg";
        $posts[2]['link'] = "#";
        $posts[3]['title'] = "Morre em Paris o último deus da dança";
        $posts[3]['image'] = "4.jpg";
        $posts[3]['link'] = "#";
        $events = ModelEvents::section_events();
        return view('home')->with('dados_contato',$dados_contato)->with("banners",$banner)->with("text_photo",$text_photo)->with("courses",$courses)->with("posts",$posts)->with("events",$events);
    }
}
