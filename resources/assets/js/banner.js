/**
 * Created by luizm on 21/07/2016.
 */
var animando_banner;
var tempo_banner = 7000;
var tempo_animacao_banner = 350;
var banner_atual = 0;
var timeout;
var contador_banner = 0;
$(window).ready(function(){
    $(".banner").each(function(){
        $("#container-controle-banner").append("<div data-banner='"+contador_banner+"' class=\"controle-banner\"/>");
        contador_banner++;
    });
    contador_banner-=1;
    $(".controle-banner").click(function(){
        click_banner($(this).attr("data-banner"));
        return false;
    });
    $('.banner-arrow-left').click(function(){
        click_banner(previous_banner());
        return false;
    });
    $('.banner-arrow-right').click(function(){
        click_banner(next_banner());
        return false;
    });
    anima_banner(0);
});
function anima_banner(banner){
    clearTimeout(timeout);
    animando_banner = true;
    $(".banner").fadeTo(tempo_animacao_banner,0);
    $(".banner[data-banner='"+banner+"']").fadeTo(tempo_animacao_banner,1,function (){
        animando_banner = false;
        set_next_banner();
    });
    remove_class("controle-banner-ativo");
    $(".controle-banner[data-banner='"+banner+"']").addClass("controle-banner-ativo");
    banner_atual = banner;
}
function next_banner(){
    return (banner_atual == contador_banner)?0:banner_atual+1;
}
function previous_banner() {
    return (banner_atual > 0)?banner_atual-1:contador_banner;
}
function set_next_banner(){
    timeout = setTimeout("anima_banner("+(next_banner())+")",tempo_banner);
}
function click_banner(banner_number) {
    if(!animando_banner) {
        anima_banner(banner_number);
    }
}