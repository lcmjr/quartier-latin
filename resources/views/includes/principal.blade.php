<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quartier Latin @yield('title')</title>
    <base href="{{ asset('/') }}"/>
    <link rel="icon" href="imagens/favicon.ico" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- inline public/css/small.css -->
    <link href='css/small.css' rel='stylesheet' inline type='text/css'>
    <link href='css/all.css' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/padrao.js"></script>
    @yield('javascript')
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
            <a class="lnk-menu lnk-backstage" href="backstage">BACKSTAGE</a>
            <a class="lnk-menu lnk-contato" href="contato">CONTATO</a>
        </nav>
        @include('includes.redes-sociais', [ "dados_contato"=>$dados_contato[0],"show_link"=>false,"show_youtube"=>false])
        <div class="clearfix"></div>
    </div>
</header>
@yield('conteudo')
<footer id="rodape" class="bg-black">
    <div class="central">
        <div id="onde-estamos-rodape">
            <h2 class="titulo-rodape">ONDE ESTAMOS?</h2>
            @include('includes.endereco', ["dados_contato"=>$dados_contato[0]])
        </div>
        <div id="informacoes-rodape">
            <h2 class="titulo-rodape">INFORMAÇÕES</h2>
            {{$dados_contato[0]->telefone}}<br/>
            {{$dados_contato[0]->email}}
            <br/><br/>
            @include('includes.redes-sociais', [ "dados_contato"=>$dados_contato[0],"show_link"=>false,"show_youtube"=>true])
        </div>
        <div id="newletter-rodape" class="form-horizontal">
            <h2 class="titulo-rodape">INSCREVA-SE E RECEBA TODAS AS NOVIDADES!</h2>
            <form action="newsletter" method="post">
                <div class="form-group">
                    <label for="nome-news" class="col-md-3 control-label">Nome:</label>
                    <div class="col-md-9">
                        <input id="nome-news" type="text" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email-news" class="col-md-3 control-label">Email:</label>
                    <div class="col-md-9">
                        <input id="email-news" type="email" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn-standard btn-gray btn-send">ENVIAR</button>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
        <div id="copyright">
            <span>Quartier Latin Ballet - Copyright 2016. Todos os direitos reservados.</span>
            <a id="logo-youp" target="_blank" href="http://youp.com.br/"></a>
            <div class="clear"></div>
        </div>
    </div>
</footer>
</body>
</html>