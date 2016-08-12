<a href="{{$dados_contato->facebook}}" class="icon-social icon-face">{{ $show_link ? $dados_contato->facebook :""}}</a>
<a href="{{$dados_contato->instagram}}" class="icon-social icon-instagram">{{ $show_link ? $dados_contato->instagram :""}}</a>
@if($show_youtube)
<a href="{{$dados_contato->youtube}}" class="icon-social icon-youtube">{{ $show_link ? $dados_contato->youtube :""}}</a>
@endif