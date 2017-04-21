@if($central)
    <div class="central margin-bottom">
@endif
<h1 class="title-border {{$classe_title or ""}}">CHEGOU A SUA VEZ DE SUBIR AO PALCO</h1>
<h2 class="subtitle-border {{$classe_title or ""}}">Para mais informações sobre os cursos, e grade de horários utilize o formulário abaixo</h2>
<div id="msg-result-courses"></div>
<div class="form-horizontal">
    <form action="form-cursos" onsubmit="return ajax_courses()" id="informacoes-courses" method="post">
        <div class="row">
            <div class="col-md-6 col-sm-6 animate-in animate-x-neg">
                <div class="form-group">
                    <label for="nome-courses" class="col-md-4 col-sm-4 control-label">Nome:</label>
                    <div class="col-md-8 col-sm-8">
                        <input id="nome-courses" name="nome-courses" data-required-name="Nome" type="text" class="required-ipt-courses form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email-courses" class="col-md-4 col-sm-4 control-label">Email:</label>
                    <div class="col-md-8 col-sm-8">
                        <input id="email-courses" name="email-courses" type="email" data-required-name="Email" class="required-ipt-courses form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone-courses" class="col-md-4 col-sm-4 control-label">Telefone:</label>
                    <div class="col-md-8 col-sm-8">
                        <input id="phone-courses" name="phone-courses" type="tel" class="form-control"/>
                    </div>
                </div>
                <div class="form-group form-group-twolines">
                    <label for="course-courses" class="col-md-4 col-sm-4 control-label">Qual o curso de seu interesse?</label>
                    <div class="col-md-8 col-sm-8">
                        <select class="form-control" id="course-courses" name="course-courses">
                            @foreach($courses as $course)
                                <option value="{{$course->title}}">{{$course->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 animate-in animate-y-pos">
                <div class="form-group">
                    <label for="period-courses" class="col-md-4 col-sm-4 control-label">Qual período?</label>
                    <div class="col-md-8 col-sm-8">
                        <select class="form-control" id="period-courses" name="period-courses">
                            <option value="Manhã">MANHÃ</option>
                            <option value="Tarde">TARDE</option>
                            <option value="Noite">NOITE</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="msg-courses" class="col-md-4 col-sm-4 control-label">Mensagem:</label>
                    <div class="col-md-8 col-sm-8">
                        <textarea id="msg-courses" data-required-name="Mensagem" class="required-ipt-courses form-control" name="msg-courses"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn-standard btn-gold btn-send">ENVIAR</button>
                </div>
            </div>
        </div>
    </form>
</div>
@if($central)
    </div>
@endif