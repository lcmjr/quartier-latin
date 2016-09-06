<?php

namespace App\Http\Controllers;

use App\ModelContato;
use App\ModelCourses;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerContact extends Controller {
    public function page() {
        $dados_contato = ModelContato::contact_page_data();
        $courses = ModelCourses::all();
        return view('contact')->with('dados_contato', $dados_contato)->with("courses",$courses);
    }
    public function email(Request $request){
        $data['nome'] = $request->input('nome');
        $data['email'] = $request->input('email');
        $data['telefone'] = $request->input('telefone');
        $data['informacoes'] = $request->input('informacoes');
        Mail::send('mail.contact',["data"=>$data],function($m) use($data){
            $m->from('no-reply@clinicapersonnalite.com','Clinica Personnalité');
            $m->to('contato@clinicapersonnalite.com','Clinica Personnalité')->subject('O Cliente '.$data['nome']);
        });
    }
}
