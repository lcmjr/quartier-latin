<section class="central section-margin text-center margin-bottom">
    <h1 class="title-border">PRÓXIMOS EVENTOS</h1>
    <div class="row">
        @foreach($events as $event)
            <div class="event col-md-3 margin-bottom">
                <div class="content-day-event">
                    <span class="day-event">{{$event['day']}}</span>
                    <span class="month-event">{{$event['month']}}</span>
                </div>
                <h2>{{$event->title}}</h2>
            </div>
        @endforeach
        <div class="clearfix"></div>
    </div>
    <a href="calendario" class="btn-standard btn-gray">ACESSE TODOS OS EVENTOS</a>
</section>