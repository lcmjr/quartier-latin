@extends('includes.principal')
@section('classe-pg', 'page-quartier')
@section('javascript')
    <script type="text/javascript" src="js/jquery.mobile.custom.min.js"></script>
    <script type="text/javascript" src="js/gallery.js"></script>
    <script type="text/javascript" src="js/quartier-latin.js"></script>
@stop
@section('content-rotate')
    <h1 class="title-border">{{$plie->title}}</h1>
    <h2 class="subtitle-border">{{$plie['sub-title']}}</h2>
    <div class="row">
        <div class="col-md-6 col-sm-6 content-plie animate-in animate-x-neg">
            <h2 class="title-bullet color-orange">&bull; {{$plie['title-2']}}</h2>
            <div class="ctd-text">
                {!!$plie->text!!}
            </div>
            <h2 class="title-bullet color-orange">&bull; {{$plie['title-3']}}</h2>
            <iframe width="450" height="250" src="https://www.youtube.com/embed/<?= str_replace("https://www.youtube.com/watch?v=","",$plie->youtube);?>" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-md-6 col-sm-6 animate-in animate-y-pos"><div class="icon-ballet-dancer"></div></div>
    </div>
@stop
@section('conteudo')
    @include('sections.bg-rotate',["classes_rotate" => "bg-rotate-gray bg-rotate-toleft"])
    <div class="central">
        <div class="icon-ballet-shoes"></div>
        <h1 class="title-border color-orange">SESSÃO POESIA</h1>
        <div class="row">
            <div class="col-md-6 col-sm-6 poetry-txt animate-in animate-x-neg">
                <h2 class="title-poetry color-orange">{{$poetry[0]['title']}}</h2>
                <h3 class="title-autor-poetry">{{$poetry[0]['sub-title']}}</h3>
                {!!$poetry[0]['text-1']!!}</div>
            <div class="col-md-6 col-sm-6 poetry-txt poetry-txt-second-col animate-in animate-y-pos">{!!$poetry[0]['text-2']!!}</div>
        </div>
    </div>
    @section('content-rotate')
        <div class="icon-love-ballet"></div>
        <h1 class="title-border">DESENHOS PARA COLORIR</h1>
        <h2 class="subtitle-border">Clique nas imagens para fazer o download e divirta-se!</h2>
        <div class="container-drawnings">
            <?php $animate_count = 0;?>
            @foreach($drawings as $drawing)
                <a class="drawnings animate-in animate-y-pos {{$class_animate_y[$animate_count]}}" target="_blank" href="uploads/drawnings/{{$drawing->full}}"><img src="uploads/drawnings/{{$drawing->thumbnail}}" alt=""/></a>
                <?php $animate_count = ($animate_count<2)?$animate_count+1:0;?>
            @endforeach
            <div class="clearfix"></div>
        </div>
    @overwrite
    @include('sections.bg-rotate',["classes_rotate" => "bg-rotate-orange bg-rotate-toleft bg-rotate-after-none"])
@stop