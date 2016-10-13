<?php

namespace App\Http\Controllers;

use App\GalleryPhotos;
use App\GalleryVideos;
use App\ModelContato;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerGallery extends Controller {
    public function page(){
        $photos = GalleryPhotos::all();
        $videos = GalleryVideos::all();
        $dados_contato = ModelContato::dados_contato();
        return view('gallery')->with('dados_contato',$dados_contato)->with("videos",$videos)->with("photos",$photos);
    }
}
