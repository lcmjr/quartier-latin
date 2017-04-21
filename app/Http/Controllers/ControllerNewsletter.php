<?php

namespace App\Http\Controllers;

use App\ModelNewsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Newsletter;

class ControllerNewsletter extends Controller {
    public function email(Request $request){
        $data['nome'] = $request->input('nome-news');
        $data['email'] = $request->input('email-news');
        $merge_var =["FNAME"=>$data['nome']];
        Newsletter::subscribe($data['email'],$merge_var,"newsletter");
    }

    public function ativar_email($codigo){
        ModelNewsletter::find($codigo)->update(['ativo' => 'S']);
        return redirect()->route('Home');
    }

    private function enviar_email($data){
        Mail::send('mail.newsletter',["data"=>$data],function($m) use($data){
            $m->from('no-reply@quartierlatin.com.br','Quartier Latin');
            $m->to($data['email'],$data['nome'])->subject('Confirmação de Newsletter');
        });
    }
}
