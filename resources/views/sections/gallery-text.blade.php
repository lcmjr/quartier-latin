<article class="central text-center-sm">
    <h1 class="title-border {{$classe_title or ""}}">{{$text->title}}</h1>
    <div class="row">
        <div class="ctd-text {{$class_text}}">{!!$text->text!!}</div>
        <div class="gallery-text-photos {{$class_gallery}}">
            @foreach($gallery_text as $photos_text)
                <img class="animate-in animate-y-pos" alt="{{$text->title}}" src="uploads/gallery-text/{{$photos_text->photo}}"/>
            @endforeach
        </div>
    </div>
    <div class="clearfix"></div>
</article>