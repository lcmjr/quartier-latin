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
        $videos = GalleryVideos::paginate(6);
        $dados_contato = ModelContato::dados_contato();
        return view('gallery')->with('dados_contato',$dados_contato)->with("videos",$videos)->with("photos",$photos);
    }

    public function ajax_video(){
        $videos = GalleryVideos::paginate(6);
        return view('gallery.gallery-videos')->with('videos',$videos);
    }
}
