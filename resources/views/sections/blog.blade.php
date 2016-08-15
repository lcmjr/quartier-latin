@extends('sections.bg-rotate',["classes_rotate" => "bg-rotate-orange bg-rotate-toleft text-center"])
@section('content-rotate')
    <h1 class="title-border">AS ÚLTIMAS DO BACKSTAGE</h1>
    <h2 class="subtitle-border">Dicas, novidades e blá blá blá.</h2>
    <div class="row">
        @foreach($posts as $post)
            <div class="post col-md-3">
                <div class="img-post">
                    <a href="{{$post['link']}}"><img alt="{{$post['title']}}" src="uploads/post/{{$post['image']}}"/></a>
                </div>
                <a href="{{$post['link']}}"><h2>{{$post['title']}}</h2></a>
            </div>
        @endforeach
        <div class="clearfix"></div>
    </div>
    <a href="contato" class="btn-standard btn-gold">ACESSE O BACKSTAGE</a>
@overwrite