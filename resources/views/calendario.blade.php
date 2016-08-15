@extends('includes.principal')
@section('classe-pg', 'page-calendario')

@section('content-rotate')
<h1 class="title-border">PRÓXIMOS EVENTOS</h1>
<div class="events-content">
    @foreach($events as $key=>$event)
        <div class="event event-pg @if(count($events) == ($key+1))last-event @endif @if($event->link == '' && $event['ticket-link'] == '')event-nobutton @endif">
            <div class="content-day-event text-center">
                <span class="day-event">{{$event['day']}}</span>
                <span class="month-event">{{$event['month']}}</span>
            </div>
            <h2 class="event-title">{{$event->title}}</h2>
            <div class="clearfix"></div>
            {!! $event->text !!}
            <br/>
            <p><b>Quando?</b><br/>{{$event->when}}</p>
            <p><b>Horário</b><br/>{{$event->schedule}}</p>
            <p><b>Onde?</b><br/>{{$event->where}}</p>
            <p><b>Endereço:</b>{{$event->address}}</p>
            @if($event->link != '')
            <a href="{{$event->link}}" target="_blank" class="btn-standard btn-gray">SITE OFICIAL</a>
            @endif
            @if($event['ticket-link'] != '')
            <a href="{{$event['ticket-link']}}" target="_blank" class="btn-standard btn-gold">COMPRE SEU INGRESSO</a>
            @endif
        </div>
    @endforeach
    <div class="clearfix"></div>
</div>
@stop
@section('conteudo')
    @include('sections.bg-rotate',["classes_rotate" => "bg-rotate-gray bg-rotate-toleft"])
    @include('sections.blog',["class_container" => "bg-rotate-toright bg-rotate-fitup bg-rotate-after-none"])
@stop