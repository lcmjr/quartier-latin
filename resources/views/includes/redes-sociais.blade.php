@if($dados_contato->facebook != '#')
<a href="{{$dados_contato->facebook}}" target="_blank"
   class="icon-face {{ $show_link ?"icon-social-link":"icon-social"}}">{{ $show_link ? $dados_contato->label_facebook :""}}</a>
@endif
@if($dados_contato->instagram != '#')
<a href="{{$dados_contato->instagram}}" target="_blank"
   class="icon-instagram {{ $show_link ? "icon-social-link":"icon-social"}}">{{ $show_link ? $dados_contato->label_instagram :""}}</a>
@endif
@if($show_youtube)
    @if($dados_contato->youtube != '#')
    <a href="{{$dados_contato->youtube}}" target="_blank"
       class="icon-youtube {{ $show_link ? "icon-social-link":"icon-social"}}">{{ $show_link ? $dados_contato->label_youtube :""}}</a>
    @endif
@endif