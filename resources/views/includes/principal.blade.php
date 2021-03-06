<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="DESCRIPTION"
          content="quartier latin, santo andré, escola de ballet, ballet clássico para crianças, ballet clásico para adultos,
          ballet clássico, ballet, escola de ballet em santo andré, marisa ballarini, quartier latin santo andré, quartier latin escola de dança,
          ballet clássico iniciante, ballet clássico em santo andré"/>
    <meta name="DISTRIBUTION" content="global"/>
    <meta name="publisher" content="Agência YOUP"/>
    <meta name="googlebot" content="index, follow"/>
    <meta name="author" content="www.youp.com.br"/>
    <meta name="revisit-after" content="1"/>
    <meta name="revisit-after" content="7 days"/>
    <meta name="distribution" content="Global"/>
    <meta name="language" content="portugues (portuguese)"/>
    <meta name="expires" content="never"/>
    <meta name="rating" content="Geral"/>
    <meta name="robots" content="index,follow,ALL"/>
    <meta name="doc-class" content="Completed"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:title" content="Quartier Latin @yield('title')">
    <meta property="og:site_name" content="Quartier Latin">
    <meta property="og:description" content="quartier latin, santo andré, escola de ballet, ballet clássico para crianças, ballet clásico para adultos,
          ballet clássico, ballet, escola de ballet em santo andré, marisa ballarini, quartier latin santo andré, quartier latin escola de dança,
          ballet clássico iniciante, ballet clássico em santo andré">
    <meta property="og:image" content="{{ asset('/') }}imagens/logo.png">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="159">
    <meta property="og:image:height" content="158">
    <meta property="og:type" content="website">
    <title>Quartier Latin @yield('title')</title>
    <base href="{{ asset('/') }}"/>
    <link rel="icon" href="imagens/favicon.ico"/>
    <!-- inline ../../../public/css/small.css -->
    <link href='css/small.css' rel='stylesheet' inline type='text/css'>
</head>
<body class="@yield('classe-pg')">
<header id="topo-principal" class="bg-black">
    <div class="central">
        <a id="logo" href="home"></a>
        <button id="btn-menu-rpsv" class="hamburger hamburger--collapse" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        <nav id="menu-principal">
            <a class="lnk-menu lnk-quartier" href="quartier-latin">QUARTIER LATIN</a>
            <a class="lnk-menu lnk-trajetoria" href="trajetoria">TRAJETÓRIA</a>
            <a class="lnk-menu lnk-formacao" href="formacao">FORMAÇÃO</a>
            <a class="lnk-menu lnk-galeria" href="galeria">GALERIA</a>
            <a class="lnk-menu lnk-backstage" href="../backstage">BACKSTAGE</a>
            <a class="lnk-menu lnk-plie" href="plie">PLIÉ</a>
            <a class="lnk-menu lnk-calendario" href="calendario">CALENDÁRIO</a>
            <a class="lnk-menu lnk-contato" href="contato">CONTATO</a>
        </nav>
        @include('includes.redes-sociais', [ "dados_contato"=>$dados_contato[0],"show_link"=>false,"show_youtube"=>true])
        <div class="clearfix"></div>
    </div>
</header>
@yield('conteudo')
<footer id="rodape" class="bg-black">
    <div class="central">
        <div id="onde-estamos-rodape" class="animate-in animate-x-neg">
            <h2 class="titulo-rodape">ONDE ESTAMOS?</h2>
            @include('includes.endereco', ["dados_contato"=>$dados_contato[0]])
        </div>
        <div id="informacoes-rodape" class="animate-in animate-x-pos">
            <h2 class="titulo-rodape">INFORMAÇÕES</h2>
            {{$dados_contato[0]->telefone}}<br/>
            {{$dados_contato[0]->email}}
            <br/><br/>
            @include('includes.redes-sociais', [ "dados_contato"=>$dados_contato[0],"show_link"=>false,"show_youtube"=>true])
        </div>
        <div id="newletter-rodape" class="form-horizontal animate-in animate-x-neg">
            <h2 class="titulo-rodape">INSCREVA-SE E RECEBA TODAS AS NOVIDADES!</h2>
            <div id="msg-result-news"></div>
            <form action="newsletter" onsubmit="return enviar_news()" id="form-newsletter" method="post">
                <div class="form-group">
                    <label for="nome-news" class="col-md-3 control-label">Nome:</label>
                    <div class="col-md-9">
                        <input id="nome-news" name="nome-news" type="text" data-required-name="Nome"
                               class="required-ipt-news form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email-news" class="col-md-3 control-label">Email:</label>
                    <div class="col-md-9">
                        <input id="email-news" name="email-news" data-required-name="Email" type="email"
                               class="required-ipt-news form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn-standard btn-gray btn-send">ENVIAR</button>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
        <div id="copyright" class="animate-in animate-x-neg">
            <span>Quartier Latin Ballet - Copyright 2016. Todos os direitos reservados.</span>
            <a id="logo-youp" target="_blank" href="http://youp.com.br/"></a>
            <div class="clear"></div>
        </div>
    </div>
</footer>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href='css/all.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/padrao.js"></script>
@yield('javascript')
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-84801708-1', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>