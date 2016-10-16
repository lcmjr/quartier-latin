(function($) {
    /**
     * Copyright 2012, Digital Fusion
     * Licensed under the MIT license.
     * http://teamdf.com/jquery-plugins/license/
     *
     * @author Sam Sehnert
     * @desc A small plugin that checks whether elements are within
     *     the user visible viewport of a web browser.
     *     only accounts for vertical position, not horizontal.
     */

    $.fn.visible = function(partial) {

        var $t            = $(this),
            $w            = $(window),
            viewTop       = $w.scrollTop(),
            viewBottom    = viewTop + $w.height(),
            _top          = $t.offset().top,
            _bottom       = _top + $t.height(),
            compareTop    = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;

        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

    };

})(jQuery);
/**
 * Created by luizm on 19/07/2016.
 */
$(window).ready(function(){
    $("#btn-menu-rpsv").click(function () {
        if($(this).hasClass("is-active")){
            $(this).removeClass("is-active");
            $("#menu-principal").slideUp(500);
        }else {
            $(this).addClass("is-active");
            $("#menu-principal").slideDown(500);
        }
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(this).scroll();
}).scroll(function(){
    $(".animate-in").each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("animate-start");
        }
    });
});
function remove_class(classe) {
    $("." + classe).removeClass(classe);
}
//# sourceMappingURL=padrao.js.map
