<?php

namespace App\Http\Controllers;

use App\class_animate;
use App\GalleryPhotos;
use App\GalleryVideos;
use App\ModelContato;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerGallery extends Controller {
    public function page(){
        $photos = GalleryPhotos::all();
        $class_animate_y = class_animate::get_animate();
        $videos = GalleryVideos::paginate(6);
        $dados_contato = ModelContato::dados_contato();
        return view('gallery')->with('class_animate_y',$class_animate_y)->with('dados_contato',$dados_contato)->with("videos",$videos)->with("photos",$photos);
    }

    public function ajax_video(){
        $videos = GalleryVideos::paginate(6);
        $class_animate_y = class_animate::get_animate();
        return view('gallery.gallery-videos')->with('class_animate_y',$class_animate_y)->with('videos',$videos);
    }
}
