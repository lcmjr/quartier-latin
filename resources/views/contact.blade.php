@extends('includes.principal')
@section('classe-pg', 'page-contato')

@section('javascript')
    <script type="text/javascript" src="js/contato.js"></script>
@stop
@section('content-rotate')
    <h1 class="title-border">ENTRE EM CONTATO</h1>
    <div class="row">
        <div class="col-md-6 col-sm-6 animate-in animate-x-neg">
            <span class="color-orange">{{$dados_contato[0]->email}}<br/>
            telefone: {{$dados_contato[0]->telefone}}</span>
            @include('includes.redes-sociais', [ "dados_contato"=>$dados_contato[0],"show_link"=>true,"show_youtube"=>true])
        </div>
        <div class="col-md-6 col-sm-6 animate-in animate-y-pos"><p>Envie uma mensagem através do formulário abaixo:</p>
            <div id="msg-result-contato"></div>
            <form method="post" id="form-contact" onsubmit="return ajax_contact()" action="contato">
                {{ csrf_field()}}
                <div class="form-group">
                    <label for="nome-contact" class="col-md-3 col-sm-3 control-label">Nome:</label>
                    <div class="col-md-9 col-sm-9">
                        <input id="nome-contact" name="nome-contact" type="text" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email-contact" class="col-md-3 col-sm-3 control-label">Email:</label>
                    <div class="col-md-9 col-sm-9">
                        <input id="email-contact" name="email-contact" type="email" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone-contact" class="col-md-3 col-sm-3 control-label">Telefone:</label>
                    <div class="col-md-9 col-sm-9">
                        <input id="phone-contact" name="phone-contact" type="tel" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message-contact" class="col-md-3 col-sm-3 control-label">Mensagem:</label>
                    <div class="col-md-9 col-sm-9">
                        <textarea class="form-control" rows="5" id="message-contact" name="message-contact"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-standard btn-gold btn-send">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="clearfix"></div>
@stop
@section('conteudo')
    @include('sections.bg-rotate',["classes_rotate" => "bg-rotate-gray section-contact-form bg-rotate-toleft"])
    <section class="text-center section-maps">
        <h1 class="title-border color-orange">ONDE ESTAMOS?</h1>
        <h2>{{$dados_contato[0]->endereco_1}}<br/>{{$dados_contato[0]->endereco_2}} - {{$dados_contato[0]->endereco_3}}</h2>
        {!! str_replace('<x>','',$dados_contato[0]->maps)!!}
    </section>
    @section('content-rotate')
        @include('sections.form-courses',["central"=>false])
    @overwrite
    @include('sections.bg-rotate',["classes_rotate" => "bg-rotate-orange bg-rotate-toleft bg-rotate-after-none"])
@stop