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
function enviar_news(){
    if(!validaForm(".required-ipt-news","msg-result-news"))
        return false;
    box_ajax_response("msg-result-news", "Enviando a mensagem...", "info");
    $.ajax({
        type: 'POST',
        url: "newsletter",
        data: $('#form-newsletter').serialize(),
        success: function (data) {
            $('#form-newsletter input').val("");
            box_ajax_response("msg-result-news", "Mensagem enviada com sucesso, obrigado pelo contato!", "success");
        },
        error: function (erro) {
            console.log(erro);
            box_ajax_response("msg-result-news", "Ocorreu um erro no envio!", "danger");
        }
    });
    return false;
}
function box_ajax_response(id,msg,class_bootstrap){
    $("#"+id).hide({duration:200,
        msg:msg,
        class_bootstrap:class_bootstrap,
        complete:function(event) {
            $(this).html(msg).attr("class", "alert alert-" + class_bootstrap).show(200);
        }});
}
function ajax_courses(){
    if(!validaForm(".required-ipt-courses","msg-result-courses"))
        return false;
    box_ajax_response("msg-result-courses", "Enviando a mensagem...","info");
    $.ajax({
        type: 'POST',
        url: "form-cursos",
        data: $('#informacoes-courses').serialize(),
        success: function (data) {
            $('#informacoes-courses input,#informacoes-courses textarea').val("");
            box_ajax_response("msg-result-courses", "Mensagem enviada com sucesso, obrigado pelo contato!", "success");
        },
        error: function (erro) {
            console.log(erro);
            box_ajax_response("msg-result-courses", "Ocorreu um erro no envio!", "danger");
        }
    });
    return false;
}
function validaForm(classe,box_chamada){
    erro_campo_preenchido = false;
    $(classe).each(function(){
        if ($(this).val() == '') {
            erro_campo_preenchido = true;
            var nome_campo = $(this).attr("data-required-name");
            box_ajax_response(box_chamada, "Preencha o campo "+nome_campo+" !", "danger");
            return false;
        }
    });
    return !erro_campo_preenchido;
}
//# sourceMappingURL=padrao.js.map
