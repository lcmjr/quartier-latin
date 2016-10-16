/**
 * Created by luizm on 13/09/2016.
 */
var page = 1;
$(window).ready(function () {
    $(".galeria").gallery({has_title: true});
    $("#btn-more-videos").click(function () {
        if (page < $(this).attr('data-page-max')) {
            if (page + 1 == $(this).attr('data-page-max'))
                $(this).fadeOut(100);
            ajax_videos();
        }
    });
    video_elements();
});
function ajax_videos() {
    page++;
    $.ajax({
        type: 'GET',
        url: "galeria-ajax",
        data: "page=" + page,
        success: function (data) {
            $(data).insertBefore("#btn-more-videos");
            $(window).scroll();
            video_elements();
        }
    });
    return false;
}
function video_elements(){
    $(".video a").click(function(){
        var url = $(this).attr('data-embed');
        $(this).html("<iframe width=\"300\" height=\"180\" src=\"https://www.youtube.com/embed/"+url+"\"></iframe>");
        return false;
    });
}