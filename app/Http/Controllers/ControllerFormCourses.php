<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Newsletter;

class ControllerFormCourses extends Controller {
    public function email(Request $request){
        $data['nome-courses'] = $request->input('nome-courses');
        $data['email'] = $request->input('email-courses');
        $data['phone-courses'] = $request->input('phone-courses');
        $data['course-courses'] = $request->input('course-courses');
        $data['period-courses'] = $request->input('period-courses');
        $data['msg-courses'] = $request->input('msg-courses');
        Mail::send('mail.courses',["data"=>$data],function($m) use($data){
            $m->from('no-reply@quartierlatin.com.br','Quartier Latin');
            $m->to('contato@quartierlatin.com.br','Quartier Latin')->subject('O Cliente '.$data['nome-courses'].' deseja ter mais informações sobre cursos');
        });
        $merge_var =["FNAME"=>$data['nome-courses']];
        Newsletter::subscribe($data['email'],$merge_var,"cursos");
    }
}
