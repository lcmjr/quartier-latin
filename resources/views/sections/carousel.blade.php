<div class="carousel {{$class}}">
    <div id="carousel-main-image"></div>
    <div class="container-carousel">
        <div class="carousel-arrow carousel-arrow-left"></div>
        <div class="container-carousel-thumb">
            @foreach($carousel_photos as $photos)
                <img src="uploads/carousel/{{$photos->thumbnail}}" data-photo="{{$photos->photo}}" alt=""/>
            @endforeach
        </div>
        <div class="carousel-arrow carousel-arrow-left"></div>
    </div>
</div>