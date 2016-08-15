@extends('sections.bg-rotate',["classes_rotate" => "bg-rotate-gray bg-rotate-toleft content-photo-left"])
@section('content-rotate')
    <h1 class="title-border">{{$text_photo->title}}</h1>
    <div class="img-content">
        <img alt="{{$text_photo->title}}" src="uploads/text_photos/{{$text_photo->photo}}"/>
    </div>
    <div class="ctd-text">{!!$text_photo->text!!}
    <a href="quartier-latin" class="btn-standard btn-gray">LEIA MAIS</a><a href="contato" class="btn-standard btn-gold">ENTRE EM CONTATO</a>
    </div>
    <div class="clearfix"></div>
@stop