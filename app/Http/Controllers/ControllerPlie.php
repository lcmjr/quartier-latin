<?php

namespace App\Http\Controllers;

use App\class_animate;
use App\drawings;
use App\ModelContato;
use App\plie;
use App\poetrys;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerPlie extends Controller {
    public function page(){
        $dados_contato = ModelContato::dados_contato();
        $drawings = drawings::all();
        $poetry = poetrys::inRandomOrder()->take(1)->get();;
        $plie = plie::find(1);
        $class_animate_y = class_animate::get_animate();
        return view('plie')->with('class_animate_y',$class_animate_y)->with('dados_contato', $dados_contato)->with("drawings",$drawings)->with("poetry",$poetry)->with("plie",$plie);
    }
}
