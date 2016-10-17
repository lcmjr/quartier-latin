@extends('includes.principal')
@section('classe-pg', 'page-trajetoria')

@section('content-rotate')
    @include('sections.gallery-text',["class_gallery" => "col-md-6 gallery-txt-right gallery-text-photos-big", "class_text"=> "col-md-6 gallery-txt-left animate-in animate-x-neg"])
@stop
@section('conteudo')
    @include('sections.bg-rotate',["classes_rotate" => "bg-rotate-gray bg-rotate-toleft"])
    @include('sections.form-courses',["central"=>true,"classe_title"=>"color-orange"])
@stop