@extends('includes.principal')
@section('classe-pg', 'page-quartier')
@section('javascript')
    <script type="text/javascript" src="js/jquery.mobile.custom.min.js"></script>
    <script type="text/javascript" src="js/gallery.js"></script>
    <script type="text/javascript" src="js/quartier-latin.js"></script>
@stop
@section('content-rotate')
    <h1 class="title-border">{{$quartier_latin->title}}</h1>
    <div class="row">
        <div class="gallery-text ctd-text">{!!$quartier_latin->text!!}<a href="contato" class="btn-standard btn-gold">ENTRE EM CONTATO</a></div>
        @include('gallery.gallery',["class" => "gallery-medium","central"=>false,"photos" => $gallery_quartier,"title"=>false])
    </div>
@stop
@section('conteudo')
    @include('sections.bg-rotate',["classes_rotate" => "bg-rotate-gray bg-rotate-toleft"])
    @include('sections.text-photo',["buttons"=> "<a href=\"formacao\" class=\"btn-standard btn-gold\">SAIBA MAIS</a>","central"=>true,"class_central"=>"content-photo content-photo-left margin-bottom","class_title"=>"color-orange"])
    @section('content-rotate')
        @foreach($departments as $department)
            <h1 class="title-border">{{$department->name}}</h1>
            @foreach($department->team as $team)
                <div class="team">
                    <div class="team-image col-md-4"><img src="uploads/team/{{$team->photo}}" alt="{{$team->name}}"/></div>
                    <div class="team-text col-md-8 ctd-text">
                        <h2>{{$team->name}}</h2>
                        <h2>{{$team->job}}</h2>
                        {!!$team->text!!}
                    </div>
                </div>
            @endforeach
            <div class="clearfix"></div>
        @endforeach
    @overwrite
    @include('sections.bg-rotate',["classes_rotate" => "bg-rotate-orange bg-rotate-toleft bg-rotate-after-none"])
@stop