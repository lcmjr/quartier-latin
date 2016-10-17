<?php
if($class == "gallery-fullwidth"){
    $sizes_thumb = "width='80' height='60'";
    $size_fullimage = "width='800' height='600'";
}else{
    $sizes_thumb = "width='80' height='54'";
    $size_fullimage = "width='480' height='330'";
}?>
<section class="gallery {{$class or ""}}">
    @if($central)
    <div class="central">
    @endif
        <div id="img-main-gallery">
            <img id="main-photo" class="animate-in" src="imagens/pixel-transparente.png" alt="" {!!$size_fullimage!!}/>
            @if($title)
            <h1 id="gallery-title"></h1>
            @endif
        </div>
        @include("gallery.gallery-control")
    @if($central)
    </div>
    @endif
</section>