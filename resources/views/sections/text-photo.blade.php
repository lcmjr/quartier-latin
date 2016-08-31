@if($central)
<div class="central {{$class_central}}">
@endif
<h1 class="title-border {{$class_title or ""}}">{{$text_photo->title}}</h1>
<div class="img-content">
    <img alt="{{$text_photo->title}}" src="uploads/text_photos/{{$text_photo->photo}}"/>
</div>
<div class="ctd-text">{!!$text_photo->text!!}
    {!! $buttons !!}
</div>
<div class="clearfix"></div>
@if($central)
</div>
@endif