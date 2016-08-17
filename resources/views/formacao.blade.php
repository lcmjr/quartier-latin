@extends('includes.principal')
@section('classe-pg', 'page-formacao')

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
    @include('sections.gallery-text',["class_gallery" => "col-md-4 gallery-txt-left gallery-txt-container-small", "class_text"=> "col-md-8 gallery-txt-right","classe_title"=>"color-orange"])
    @section('content-rotate')
        @include('sections.form-courses',["central"=>false])
    @overwrite
    @include('sections.bg-rotate',["classes_rotate" => "bg-rotate-orange bg-rotate-toright bg-rotate-after-none"])
@stop