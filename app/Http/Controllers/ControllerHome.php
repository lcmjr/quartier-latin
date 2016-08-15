<?php

namespace App\Http\Controllers;

use App\ModelBanner;
use App\ModelContato;
use App\ModelCourses;
use App\ModelTextPhoto;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerHome extends Controller{
    public function page(){
        $dados_contato = ModelContato::dados_contato();
        $banner = ModelBanner::all();
        $text_photo = ModelTextPhoto::find(1);
        $courses = ModelCourses::take(3)->get();
        return view('home')->with('dados_contato',$dados_contato)->with("banners",$banner)->with("text_photo",$text_photo)->with("courses",$courses);
    }
}
