<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="DESCRIPTION" content="quartier latin, santo andré, escola de ballet, ballet clássico para crianças, ballet clásico para adultos, ballet clássico, ballet, escola de ballet em santo andré, marisa ballarini, quartier latin santo andré, quartier latin escola de dança, ballet clássico iniciante, ballet clássico em santo andré"/>
    <meta name="DISTRIBUTION" content="global"/>
    <meta name="publisher" content="Agência YOUP" />
    <meta name="googlebot" content="index, follow" />
    <meta name="author" content="www.youp.com.br" />
    <meta name="revisit-after" content="1" />
    <meta name="revisit-after" content="7 days" />
    <meta name="distribution" content="Global" />
    <meta name="language" content="portugues (portuguese)" />
    <meta name="expires" content="never" />
    <meta name="rating" content="Geral" />
    <meta name="robots" content="index,follow,ALL" />
    <meta name="doc-class" content="Completed" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Quartier Latin @yield('title')</title>
    <base href="{{ asset('/') }}"/>
    <link rel="icon" href="imagens/favicon.ico" />
    <!-- inline public/css/small.css -->
    <style type="text/css">.central{max-width:980px;margin:0 auto;width:90%}.bg-black{background:#0a0b0c}.bg-rotate-orange .content-rotate,.bg-rotate-orange:after,.bg-rotate-orange:before{background:#e15616}.bg-gray,.bg-rotate-gray .content-rotate,.bg-rotate-gray:after,.bg-rotate-gray:before{background:#e5e5e5}.bg-black,.bg-black .ctd-text a,.bg-rotate-orange,.bg-rotate-orange a{color:#fff}.ctd-text a{color:#000}.color-orange{color:#e15616}.icon-social,.icon-social-link:before{width:29px;height:29px;display:inline-block}.icon-social-link:before{content:'';margin:0 10px -9px -34px}.icon-social-link{display:block;padding-left:34px;padding-top:5px;margin:10px 0;color:#000}.icon-instagram.icon-social,.icon-instagram.icon-social-link:before{background-position:-34px 0}.icon-youtube.icon-social,.icon-youtube.icon-social-link:before{background-position:-69px 0}.reset-radius{border-radius:0}.btn-standard{color:#fff;font:400 14px/1.2 Roboto,sans-serif;padding:9px 13px 10px;transition:.15s;display:inline-block}.btn-standard:hover{color:#fff;text-decoration:none}.btn-gold,.btn-gray:hover{background:#c9ad69}.btn-gold:hover,.btn-gray{background:#6f6f6f}.btn-send{float:right;margin-right:15px}#btn-menu-rpsv{display:none}#topo-principal{text-align:center;padding:25px 0 15px}#logo{width:159px;height:158px;margin:0 auto 25px;display:block}#menu-principal{padding:4px 0;display:inline-block}.lnk-menu{transition:.15s;padding:0 15px;color:#fff;border-left:1px solid #fff}.lnk-quartier{border:none}.lnk-menu:hover,.page-backstage .lnk-backstage,.page-calendario .lnk-calendario,.page-contato .lnk-contato,.page-formacao .lnk-formacao,.page-galeria .lnk-galeria,.page-plie .lnk-plie,.page-quartier .lnk-quartier,.page-trajetoria .lnk-trajetoria{color:#a9ece8}#topo-principal .icon-social{margin-bottom:-8px}@media all and (min-width:995px){#menu-principal{display:inline-block!important}}@media all and (max-width:995px){#menu-principal{width:510px;display:block;margin:0 auto 10px}.lnk-menu{margin-top:10px;display:inline-block}.lnk-galeria{border:none}}@media all and (min-width:591px) and (max-width:995px){#menu-principal{display:block!important}}@media all and (max-width:590px){.lnk-menu{border-left:0;border-bottom:1px solid #e15616;width:100%;padding:10px 0;margin-top:0}.lnk-quartier{border-top:1px solid #e15616}#logo{margin-bottom:10px}#topo-principal .central{width:100%}#menu-principal{width:100%;display:none}.lnk-menu:hover,.page-backstage .lnk-backstage,.page-calendario .lnk-calendario,.page-contato .lnk-contato,.page-formacao .lnk-formacao,.page-galeria .lnk-galeria,.page-plie .lnk-plie,.page-quartier .lnk-quartier,.page-trajetoria .lnk-trajetoria{background:#e15616;color:#fff;text-decoration:none;border-color:#000}#btn-menu-rpsv{display:block;margin:0 auto 10px}}</style>
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
            <a class="lnk-menu lnk-formacao" href="formacao">FORMAÇÃO</a>
            <a class="lnk-menu lnk-calendario" href="calendario">CALENDÁRIO</a>
            <a class="lnk-menu lnk-trajetoria" href="trajetoria">TRAJETÓRIA</a>
            <a class="lnk-menu lnk-galeria" href="galeria">GALERIA</a>
            <a class="lnk-menu lnk-plie" href="plie">PLIÉ</a>
            <a class="lnk-menu lnk-backstage" href="../backstage">BACKSTAGE</a>
            <a class="lnk-menu lnk-contato" href="contato">CONTATO</a>
        </nav>
        @include('includes.redes-sociais', [ "dados_contato"=>$dados_contato[0],"show_link"=>false,"show_youtube"=>false])
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
                        <input id="nome-news" name="nome-news" type="text" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email-news" class="col-md-3 control-label">Email:</label>
                    <div class="col-md-9">
                        <input id="email-news" name="email-news" type="email" class="form-control"/>
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href='css/all.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/padrao.js"></script>
@yield('javascript')
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-84801708-1', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>