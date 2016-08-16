@extends('includes.principal')
@section('classe-pg', 'page-calendario')

@section('content-rotate')
    <h1 class="title-border">FORMAÇÃO DANÇA CLÁSSICA</h1>
    <div class="row">
        @foreach($courses as $course)
            <div class="course course-pg col-md-4 col-sm-6">
                <div class="img-course">
                    <img alt="{{$course->title}}" src="uploads/courses/{{$course->photo}}"/>
                </div>
                <h2 class="color-orange">{{$course->title}}</h2>
                {!!$course->text!!}
            </div>
        @endforeach
    </div>
    <div class="clearfix"></div>
@stop
@section('conteudo')
    @include('sections.bg-rotate',["classes_rotate" => "bg-rotate-gray bg-rotate-toleft"])
    <div class="central text-center-sm">
        <h1 class="title-border color-orange">{{$text->title}}</h1>
        <div class="row">
            <div class="gallery-text-photos col-md-4">
                @foreach($gallery_text as $photos_text)
                    <img alt="{{$text->title}}" src="uploads/gallery-text/{{$photos_text->photo}}"/>
                @endforeach
            </div>
            <div class="ctd-text col-md-8">{!!$text->text!!}</div>
        </div>
        <div class="clearfix"></div>
    </div>
    @section('content-rotate')
        @include('sections.form-courses')
    @overwrite
    @include('sections.bg-rotate',["classes_rotate" => "bg-rotate-orange bg-rotate-toright bg-rotate-after-none"])
@stop