<?php

namespace App\Http\Controllers;

use App\class_animate;
use App\ModelContato;
use App\ModelCourses;
use App\TextWithGallery;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerFormation extends Controller{
    public function page(){
        $dados_contato = ModelContato::dados_contato();
        $courses = ModelCourses::all();
        $text = TextWithGallery::find(1);
        $gallery_text = TextWithGallery::find(1)->gallery;
        $class_animate_y = class_animate::get_animate();
        return view('formacao')->with('class_animate_y',$class_animate_y)->with('dados_contato',$dados_contato)->with("courses",$courses)->with("text",$text)->with("gallery_text",$gallery_text);
    }
}