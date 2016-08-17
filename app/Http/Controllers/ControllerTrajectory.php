<?php

namespace App\Http\Controllers;

use App\ModelContato;
use App\ModelCourses;
use App\TextWithGallery;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerTrajectory extends Controller{
    public function page(){
        $dados_contato = ModelContato::dados_contato();
        $text = TextWithGallery::find(2);
        $gallery_text = TextWithGallery::find(2)->gallery;
        $courses = ModelCourses::getCouresForm();
        return view('trajectory')->with("courses",$courses)->with('dados_contato',$dados_contato)->with("text",$text)->with("gallery_text",$gallery_text);
    }
}
