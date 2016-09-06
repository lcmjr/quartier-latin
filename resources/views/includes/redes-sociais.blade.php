<a href="{{$dados_contato->facebook}}"
   class="icon-face {{ $show_link ?"icon-social-link":"icon-social"}}">{{ $show_link ? $dados_contato->facebook :""}}</a>
<a href="{{$dados_contato->instagram}}"
   class="icon-instagram {{ $show_link ? "icon-social-link":"icon-social"}}">{{ $show_link ? $dados_contato->instagram :""}}</a>
@if($show_youtube)
    <a href="{{$dados_contato->youtube}}"
       class="icon-youtube {{ $show_link ? "icon-social-link":"icon-social"}}">{{ $show_link ? $dados_contato->youtube :""}}</a>
@endif