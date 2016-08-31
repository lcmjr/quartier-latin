<section class="gallery {{$class or ""}}">
    @if($central)
    <div class="central">
    @endif
        <div id="img-main-gallery">
            <img id="main-photo" src="" alt=""/>
            @if($title)
            <h1 id="gallery-title"></h1>
            @endif
        </div>
        @include("gallery.gallery-control")
    @if($central)
    </div>
    @endif
</section>