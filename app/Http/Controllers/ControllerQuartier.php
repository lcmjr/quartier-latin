<?php

namespace App\Http\Controllers;

use App\ModelContato;
use App\ModelDepartment;
use App\ModelQuartierLatin;
use App\ModelQuartierLatinGallery;
use App\ModelTextPhoto;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerQuartier extends Controller{
    public function page(){
        $dados_contato = ModelContato::dados_contato();
        $text_photo = ModelTextPhoto::find(2);
        $departments = ModelDepartment::all();
        $quartier_latin = ModelQuartierLatin::find(1);
        $gallery_quartier = ModelQuartierLatinGallery::all();
        return view('quartier-latin')->with('dados_contato',$dados_contato)->with("text_photo",$text_photo)->with("departments",$departments)->with('quartier_latin',$quartier_latin)->with('gallery_quartier',$gallery_quartier);
    }
}
