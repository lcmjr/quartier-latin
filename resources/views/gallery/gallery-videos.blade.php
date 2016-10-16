<?php $class_animate_y = ['','animate-y-pos-2','animate-y-pos-3'];?>
<div class="page-video">
    <?php $animate_count = 0;?>
    @foreach($videos as $video)
        <div class="video animate-in animate-height animate-y-pos {{$class_animate_y[$animate_count]}}">
            <a href="{{$video->video}}" target="_blank" data-embed="<?= str_replace("https://www.youtube.com/watch?v=","",$video->video);?>"><img src="uploads/videos/{{$video->thumbnail}}" alt="{{$video->title}}"/></a>
            <h2 class="color-orange">{{$video->id}}{{$video->title}}</h2>
            <p>{!! $video->desc !!}</p>
        </div>
        <?php $animate_count = ($animate_count<2)?$animate_count+1:0;?>
    @endforeach
    <div class="clearfix"></div>
</div>