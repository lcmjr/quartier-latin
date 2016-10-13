@extends('includes.principal')
@section('classe-pg', 'page-galeria')
@section('javascript')
    <script type="text/javascript" src="js/jquery.mobile.custom.min.js"></script>
    <script type="text/javascript" src="js/gallery.js"></script>
    <script type="text/javascript" src="js/gallery-page.js"></script>
@stop
@section('content-rotate')
    <h1 class="title-border">GALERIA DE FOTOS</h1>
    @include('gallery.gallery',["class" => "gallery-fullwidth","central"=>true,"photos" => $photos,"title"=>true])
@stop
@section('conteudo')
    @include('sections.bg-rotate',["classes_rotate" => "bg-rotate-gray bg-rotate-toleft"])
    <!--<div class="central">
        <h1 class="title-border color-orange">VÍDEOS</h1>
        <div class="container-videos">
            @foreach($videos as $video)
            <div class="video">
                <a href="{{$video->video}}" target="_blank"><img src="videos/{{$video->thumb}}" alt="{{$video->title}}"/></a>
                <h2 class="color-orange">{{$video->title}}</h2>
                <p>{!! $video->desc !!}</p>
            </div>
            @endforeach
        </div>
    </div>-->
@stop