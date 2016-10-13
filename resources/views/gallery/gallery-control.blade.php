<div class="hidden-container-imgs-controle" data-qty="{{count($photos)}}">
    <div class="arrow-gallery arrow-gallery-1"></div>
    <div class="container-imgs-controle">
        @foreach($photos as $key=>$photo)
            <img src="uploads/carousel/{{$photo['thumbnail']}}" {!!$sizes_thumb!!} data-key="{{$key}}" alt="{{$photo->title or ""}}" data-foto="{{$photo['photo']}}" draggable="false"/>
        @endforeach
    </div>
    <div class="arrow-gallery arrow-gallery-2"></div>
</div>