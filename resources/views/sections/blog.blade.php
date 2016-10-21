<?php $class = (isset($class_container))?$class_container:"bg-rotate-toleft";?>
@extends('sections.bg-rotate',["classes_rotate" => "bg-rotate-orange text-center ".$class])
@section('content-rotate')
    <h1 class="title-border">AS ÚLTIMAS DO BACKSTAGE</h1>
    <h2 class="subtitle-border">Dicas, novidades e blá blá blá.</h2>
    <div class="row">
        <?php $animate_count = 0;?>
        @foreach($posts as $post)
            <div class="post col-sm-6 col-md-3 margin-bottom animate-in animate-y-pos {{$class_animate_y[$animate_count]}}">
                <div class="img-post">
                    <a href="{{$post['link']}}"><img alt="{{$post['title']}}" src="{{$post['image']}}"/></a>
                </div>
                <a href="{{$post['link']}}"><h2>{{$post['title']}}</h2></a>
            </div>
            <?php $animate_count++;?>
        @endforeach
        <div class="clearfix"></div>
    </div>
    <a href="contato" class="btn-standard btn-gold">ACESSE O BACKSTAGE</a>
@overwrite