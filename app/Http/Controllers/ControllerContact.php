<?php

namespace App\Http\Controllers;

use App\ModelContato;
use App\ModelCourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Input\Input;

class ControllerContact extends Controller {
    public function page() {
        $dados_contato = ModelContato::contact_page_data();
        $courses = ModelCourses::all();
        return view('contact')->with('dados_contato', $dados_contato)->with("courses",$courses);
    }
    public function email(Request $request){
        $data['nome'] = $request->input('nome-contact');
        $data['email'] = $request->input('email-contact');
        $data['telefone'] = $request->input('phone-contact');
        $data['mensagem'] = $request->input('message-contact');
        Mail::send('mail.contact',["data"=>$data],function($m) use($data){
            $m->from('no-reply@quartierlatin.com.br','Quartier Latin');
            $m->to('escola@quartierlatin.com.br','Quartier Latin')->subject('O Cliente '.$data['nome'].' entrou em contato');
        });
    }
}