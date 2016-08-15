@extends('includes.principal')

@section('classe-pg', 'page-home')
@section('javascript')
    <script type="text/javascript" src="js/banner.js"></script>
@stop


@section('conteudo')
<div class="bg-banner">
    <div class="container-banner central">
        <?php $contador_banner=0;?>
        @foreach($banners as $banner)
            <img class="banner" data-banner="<?= $contador_banner++;?>" alt="" src="uploads/banner/{{$banner->banner}}"/>
        @endforeach
        <div class="container-arrow-banner">
            <div class="banner-arrow banner-arrow-left"></div>
            <div class="banner-arrow banner-arrow-right"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div id="container-controle-banner"></div>
@include('sections.section-home')
<section class="text-center">
    <div class="central">
        <h1 class="title-border color-orange">ENCONTRE O SEU LUGAR</h1>
        <div class="row">
            @foreach($courses as $course)
                <div class="course col-md-4">
                    <div class="img-course">
                        <img alt="{{$course->title}}" src="uploads/courses/{{$course->photo}}"/>
                    </div>
                    <h2>{{$course->title}}</h2>
                </div>
            @endforeach
        </div>
    </div>
    <a class="btn-standard btn-gold" href="formacao">SAIBA MAIS SOBRE A FORMAÇÃO DANÇA CLÁSSICA</a>
</section>
@include('sections.blog')
@include('sections.events')
@stop