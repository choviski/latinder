@extends('/layouts/padrao')
@section('content')

    <style>
        .butn-cad {
            width: 12%;
            background-image: url(../imgs/icons/cadastrar.png);
            background-repeat: no-repeat;
            background-size: cover;
            position: fixed;
            bottom: 5%;
            right: 5%;
            z-index: 5;
            opacity: 0.5;
        }

        .butn-cad:hover {
            opacity: 1
        }


        #snackbar {
            visibility: hidden; /* Hidden by default. Visible on click */
            min-width: 250px; /* Set a default minimum width */
            margin-left: -125px; /* Divide value of min-width by 2 */
            background-image: linear-gradient(to right, dodgerblue , purple);
            color: #fff; /* White text color */
            text-align: center; /* Centered text */
            border-radius: 2px; /* Rounded borders */
            padding: 16px; /* Padding */
            position: fixed; /* Sit on top of the screen */
            z-index: 1; /* Add a z-index if needed */
            left: 50%; /* Center the snackbar */
            bottom: 30px; /* 30px from the bottom */
        }

        /* Show the snackbar when clicking on a button (class added with JavaScript) */
        #snackbar.show {
            visibility: visible; /* Show the snackbar */
            /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
            However, delay the fade out process for 2.5 seconds */
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        /* Animations to fade the snackbar in and out */
        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }
            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }
            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }
            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }
            to {
                bottom: 0;
                opacity: 0;
            }
        }

        #snackbar2 {
            visibility: hidden; /* Hidden by default. Visible on click */
            min-width: 250px; /* Set a default minimum width */
            margin-left: -125px; /* Divide value of min-width by 2 */
            background-image: linear-gradient(to right, dodgerblue , purple);
            color: #fff; /* White text color */
            text-align: center; /* Centered text */
            border-radius: 2px; /* Rounded borders */
            padding: 16px; /* Padding */
            position: fixed; /* Sit on top of the screen */
            z-index: 1; /* Add a z-index if needed */
            left: 50%; /* Center the snackbar */
            bottom: 30px; /* 30px from the bottom */
        }

        /* Show the snackbar when clicking on a button (class added with JavaScript) */
        #snackbar2.show {
            visibility: visible; /* Show the snackbar */
            /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
            However, delay the fade out process for 2.5 seconds */
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        /* Animations to fade the snackbar in and out */
        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }
            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }
            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }
            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }
            to {
                bottom: 0;
                opacity: 0;
            }
        }
        @media screen and (min-width: 400px){
            .nomeUser{
                font-size: 3vw;
            }
            .nomeAnimal{
                font-size: 5vw;
            }

        }
        .nomeUser{
            font-size: 2vw;
        }
        .nomeAnimal{
            font-size: 3vw;
        }
        @media screen and (min-width: 300px){
            .nomeUser{
                font-size: 4vw;
            }
            .nomeAnimal{
                font-size: 6vw;
            }

        }
        @media screen and (min-width: 760px){
            .nomeUser{
                font-size: 2vw;
            }
            .nomeAnimal{
                font-size: 2vw;
            }

        }
        @media screen and (min-width: 922px){
            .nomeUser{
                font-size: 2vw;
            }
            .nomeAnimal{
                font-size: 3vw;
            }

        }
    </style>
    <a href="{{route("animal.create")}}"> <img class="butn-cad" src="../images/cadastrar.png" width="100px" ;
                                               alt="Cadastrar animal"> </a>
    @if(!empty($criar))
        <div class="d-flex justify-content-center">
            <div class="alert alert-success mt-2 w-50 text-center " style="font-size: 30px">
                {{$criar}}
            </div>
        </div>
    @endif
    @foreach($publicacoes as $publicacao)
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <!-- INICIO DO CORPO DA POSTAGEM -->
                <div class="col-md-6 col-sm-10 col-lg-6 col-11 bg-light rounded-right shadow mt-md-2 mt-2 mb-5"
                     style="border-top-left-radius: 50px;border-bottom-left-radius: 50px;">
                    <div class="col-12 mt-2 text-muted p-2">
                        <a href="visitar/{{$publicacao->usuario->id}}"> <img class="rounded-circle border text"
                                                                             src="{{$publicacao->usuario->imagem}}"
                                                                             width="80px"></a>
                        <div class="col-lg-6 col-sm-4 col-md-6 col-4 d-inline-block mt-2">
                        <a class="ml-3 mt-5 nomeUser" style="font-family: 'Roboto', sans-serif; word-break: break-word "
                           href="visitar/{{$publicacao->usuario->id}}">{{$publicacao->usuario->nome}}</a>
                        </div>
                        <div class="d-inline-block  mt-2" style="margin-bottom: 0px">
                            <p class="text-center ml-2 nomeAnimal" >
                                @if($publicacao->animal->nome=="")
                                    Sem nome
                                @else
                                    {{$publicacao->animal->nome}}
                                @endif
                            </p>
                        </div>
                        <p class="text-right"><i class="fas fa-clock mb-1 mr-1"></i> {{$publicacao->tempo}}</p>
                        @if($usuario->id == $publicacao->usuario->id)
                            <div class="float-right">

                                <form method="post" action="/publicacao/remover/{{$publicacao->id}}"
                                      onsubmit="return confirm('Tem certeza que deseja excluir essa publicacao ?')">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-info" href="/animal/{{$publicacao->animal->id}}/edit/"><i
                                            class="far fa-edit"></i></a>
                                    <button class="btn btn-danger "><i class="fas fa-trash"></i></button>
                                </form>


                            </div>
                        @endif
                    </div>

                    <div class="rounded border" style="position: relative"  onclick="fullscreen('../../../{{$publicacao->animal->imagem}}')">
                        <img src="{{$publicacao->animal->imagem}}" class="rounded" width="100%"
                             style=" min-height :300px; max-height:450px; ">
                        <div class="mt-3 mt-sm-4 p-2 p-sm-0 p-md-1" style="position: absolute; bottom: -25px;">
                            <p class="d-inline-block bg-primary text-light p-1 rounded " style="word-break: break-all;margin-top: 2px;margin-bottom: 0px">Pelagem é {{$publicacao->animal->pelagem}}</p>
                            <p class="d-inline-block bg-primary text-light p-1 rounded " style="word-break: break-all;margin-top: 2px;margin-bottom: 0px"> É vacinado? {{$publicacao->animal->vacinacao}}</p>
                            <p class="d-inline-block bg-primary text-light p-1 rounded " style="word-break: break-all;margin-top: 2px;margin-bottom: 0px">Seu porte é {{$publicacao->animal->porte}}</p>
                            <p class="d-inline-block bg-primary text-light p-1 rounded " style="word-break: break-all;margin-top: 2px;margin-bottom: 0px">Seu pelo é {{$publicacao->animal->cor}}</p>
                            <p class="d-inline-block bg-primary text-light p-1 rounded " style="word-break: break-all;margin-top: 2px;margin-bottom: 0px">{{$publicacao->animal->sexo}}</p>
                            <p class="d-inline-block bg-primary text-light p-1 rounded " style="word-break: break-all;margin-top: 2px;margin-bottom: 0px">É castrado? {{$publicacao->animal->catracao}}</p>
                            <div class="mt-3 pb-2">

                            </div>

                        </div>

                    </div>
                    <p class="mt-1"><b>Descrição: </b>{{$publicacao->animal->descricao}}</p>
                        <div class="mt-3 pb-2">
                            <a><i class="fas fa-map-marker-alt"></i> {{$publicacao->animal->endereco->rua}}, {{$publicacao->animal->endereco->complemento}} | {{$publicacao->animal->endereco->cidade->nome}} - {{$publicacao->animal->endereco->cidade->estado}}</a>
                        </div>
                        <div class="mt-3 mb-1 pb-2 ">

                            <a id="like{{$publicacao->id}}" onclick="like({{$publicacao->id}})"><img id="likeImg{{$publicacao->id}}" class="border border-primary rounded-circle" src="../../images/likeVazio.png" width="50px"></a>
                            @foreach($interesses as $interesse)
                                @if($interesse->id_publicacao == $publicacao->id && $usuario->id == $interesse->id_usuario)
                                    <a id="like{{$interesse->id}}" onclick="deslike({{$interesse->id}})">
                                        <img id="likeImg{{$interesse->id}}" class="border border-primary rounded-circle" src="../../images/likeCheio.png" width="50px">
                                    </a>
                                    <script>
                                        $("#like{{$publicacao->id}}").remove();
                                        $("#likeImg{{$publicacao->id}}").remove();
                                    </script>
                                @endif
                            @endforeach
                            <a  class="text-decoration-none text-dark" href="batepapo/{{$publicacao->id}}">
                                <img id="chat"class="border border-primary rounded-circle text-decoration-none text-dark"  src="../../images/chat.png" width="50px">
                            </a>
                            <a
                               data-toggle="collapse" data-target="#collapseForm{{$publicacao->id}}"
                               aria-expanded="false" aria-controls="collapseForm{{$publicacao->id}}">
                                <img class=" border border-primary rounded-circle " id="comentarioImg{{$publicacao->id}}" class="border border-primary rounded-circle" src="../../images/comentario.png" width="50px">
                                <style>
                                    #comentarioImg{{$publicacao->id}}:hover {
                                        content: url('../../images/comentarioAnim.gif');
                                    }
                                </style>
                            </a>


                            <div class="collapse" id="collapseForm{{$publicacao->id}}">
                                <div class="card-body ">
                                    <hr>
                                    <div id="divComentarios{{$publicacao->id}}" class="p-2">

                                        @foreach($comentarios as $comentario)
                                            @if($comentario->id_publicacao == $publicacao->id)
                                                <div class="row" id="comentarioN{{$comentario->id}}">
                                                    <div class="col-12 border p-2  mt-1" style="border-radius: 20px;">
                                                        @if($usuario->id == $comentario->id_usuario || $publicacao->id_usuario == $usuario->id)
                                                            <div class="float-right">

                                                                <button class="btn text-danger"
                                                                        onclick="descomentar({{$comentario->id}})">x
                                                                </button>

                                                            </div>
                                                        @endif
                                                        <img src="{{$comentario->usuario->imagem}}" width="50px"
                                                             class="rounded-circle ">
                                                        <p class="col-12 text-break d-inline p-2">
                                                            <b>{{$comentario->usuario->nome}}</b>: {{$comentario->conteudo}}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endif

                                        @endforeach

                                    </div>

                            @csrf
                            <input type="hidden" value="{{$publicacao->id}}" name="publicacao"
                                   id="id{{$publicacao->id}}">
                            <textarea class="rounded w-100" placeholder="Insira seu comentario aqui....."
                                      style="height: 150px;resize: none" name="conteudo"
                                      id="conteudo{{$publicacao->id}}"></textarea>
                            <input type="submit" value="Comentar"
                                   class="btn btn-outline-primary mb-5 col-sm-12 col-md-12 col-lg-12"
                                   onclick="comentar({{$publicacao->id}})">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <script
                    src="https://code.jquery.com/jquery-3.4.1.min.js"
                    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                    crossorigin="anonymous"
            >
            </script>
            <script>
                function like(id) {
                    var publicacao = $('#id' + id).val();
                    $.ajax({
                        url: '/interesses/' + publicacao,
                    }).done(
                        function (data) {

                            $("#likeImg"+id).attr('src',  "../../images/likeAnim.gif" );
                            document.getElementById("like" + id).setAttribute('onClick', " deslike(" + (data['novoInteresse']) + ")");
                            document.getElementById("like" + id).id = "like" + ((data['novoInteresse']));
                            document.getElementById("likeImg" + id).id = "likeImg" + ((data['novoInteresse']));
                            var x = document.getElementById("snackbar");
                            x.className = "show";
                            setTimeout(function () {
                                x.className = x.className.replace("show", "");
                            }, 3000);
                        }
                    ).fail(
                        function () {
                            alert("erro");
                        }
                    );
                }

                function deslike(id) {

                    $.ajax({
                        url: '/interesse/removerAjax/' + id,
                        method: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                    }).done(
                        function (data) {

                            $("#likeImg"+id).attr('src',"../../images/likeVazio.png" );
                            document.getElementById("like" + id).setAttribute('onClick', " like(" + (data['novoInteresse']) + ")");
                            document.getElementById("like" + id).id = "like" + ((data['novoInteresse']));
                            document.getElementById("likeImg" + id).id = "likeImg" + ((data['novoInteresse']));
                            var x = document.getElementById("snackbar2");
                            x.className = "show";
                            setTimeout(function () {
                                x.className = x.className.replace("show", "");
                            }, 3000);
                        }
                    ).fail(
                        function () {
                            alert("erro");
                        }
                    );
                }

                function comentar(id) {
                    var publicacao = $('#id' + id).val();
                    var conteudo = $('#conteudo' + id).val();

                    $.ajax({
                        url: '/comentar/' + publicacao + '/' + conteudo,
                    }).done(
                        function (data) {
                            $("#divComentarios" + id).append(" <div class=\"row\" id=\"comentarioN"+(data['id_comentario'])+"\"><div class=\"col-12 border p-2  mt-1\" style=\"border-radius: 20px\">  <div class=\"float-right\">\n" +
                                "\n" +
                                "                                                                <button class=\"btn text-danger\"\n" +
                                "                                                                        onclick=\"descomentar("+(data['id_comentario'])+")\">x\n" +
                                "                                                                </button>\n" +
                                "\n" +
                                "                                                            </div> <img src=\"{{$usuario->imagem}}\" width=\"50px\" class=\"rounded-circle\"><p class='col-12 text-break d-inline p-2'><b>{{$usuario->nome}}</b>: " + conteudo + "</p> </div></div>");
                            $('#conteudo' + id).val("");

                        }
                    ).fail(
                        function () {
                            alert("erro ao comentar");
                        }
                    );
                }

                function descomentar(id) {

                    $.ajax({
                        url: '/comentario/removerComAjax/' + id,
                        method: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                    }).done(
                        function () {
                            $("#comentarioN" + id).remove();
                        }
                    ).fail(
                        function () {
                            alert("erro");
                        }
                    );
                }

            </script>
        </div>
        <div id="snackbar">Animal adicionado aos interesses com sucesso</div>
        <div id="snackbar2">Animal removido dos interesses com sucesso</div>


    @endforeach
    <script>
        function fullscreen(img){
            $("#imagemFullscreen").attr('src',  img );
            $("#divFullscreen").css("display", "block");
            $("body").css("overflow", "hidden")
            $("#divFullscreen").addClass("d-flex justify-content-center")
        }

    </script>
    <script>
        $("#exitFullscreen").click( function()            {
                $("#imagemFullscreen").attr('src',  "" );
                $("#divFullscreen").css("display", "none");
                $("body").css("overflow", "");
                $("#divFullscreen").removeClass("d-flex justify-content-center");

            }
        );




    </script>

@endsection
