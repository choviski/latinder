
@extends('/layouts/padrao')
@section('content')
    <style>
        .butn-cad{width: 12%; background-image: url(../imgs/icons/cadastrar.png);background-repeat: no-repeat; background-size: cover; position: fixed;bottom: 5%;right: 5%;z-index: 5;opacity:0.5;}
        .butn-cad:hover{opacity: 1}
        .tag{
            border-style: solid;
            border-width: 2px;
            border-radius: 10px;
            padding: 2px 3px;
            border-color:  #0083ff;
            color: black;
        }

         .butn-cad{width: 12%; background-image: url(../imgs/icons/cadastrar.png);background-repeat: no-repeat; background-size: cover; position: fixed;bottom: 5%;right: 5%;z-index: 5;opacity:0.5;}
        .butn-cad:hover{opacity: 1}
        .tag{
            border-style: solid;
            border-width: 2px;
            border-radius: 10px;
            padding: 2px 3px;
            border-color:  #0083ff;
            color: black;
        }
        #snackbar {
            visibility: hidden; /* Hidden by default. Visible on click */
            min-width: 250px; /* Set a default minimum width */
            margin-left: -125px; /* Divide value of min-width by 2 */
            background-color: #333; /* Black background color */
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
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }

        @keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }
        #snackbar2 {
            visibility: hidden; /* Hidden by default. Visible on click */
            min-width: 250px; /* Set a default minimum width */
            margin-left: -125px; /* Divide value of min-width by 2 */
            background-color: #333; /* Black background color */
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
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }

        @keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }
    </style>
    <a href="{{route("animal.create")}}"> <img class="butn-cad" src="../images/cadastrar.png" width="100px"; alt="Cadastrar animal"> </a>
    @foreach($publicacoes as $publicacaos)
        @foreach($publicacaos as $publicacao)
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    <!-- INICIO DO CORPO DA POSTAGEM -->
                    <div  class="col-md-8 col-sm-10 col-lg-7 col-11 bg-light rounded-right shadow mt-md-2 mt-2 mb-5" style="border-top-left-radius: 50px;border-bottom-left-radius: 50px;" >
                        <div class="col-12 mt-2 text-muted p-2">
                            <img class="rounded-circle border text" src="{{$publicacao->usuario->imagem}}" width="80px">
                            <a class="ml-3 mt-5" style="font-family: 'Roboto', sans-serif; font-size:30px " href="visitar/{{$publicacao->usuario->id}}">{{$publicacao->usuario->nome}}</a>
                            <div class="border p-0 mt-1 mb-1" style="border-radius: 50px">
                                <p class="display-4 text-center"> @if($publicacao->animal->nome=="")
                                        Sem nome
                                    @else
                                        {{$publicacao->animal->nome}}
                                    @endif</p>
                            </div>
                            <p class="text-right"> <i class="fas fa-clock mb-1 mr-1"></i> {{$publicacao->tempo}}</p>
                            @if($usuario->id == $publicacao->usuario->id)
                                <div class="float-right">

                                    <form method="post" action="/publicacao/remover/{{$publicacao->id}}" onsubmit="return confirm('Tem certeza que deseja excluir essa publicacao ?')">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-info" href="/animal/{{$publicacao->animal->id}}/edit/"><i class="far fa-edit"></i></a>
                                        <button class="btn btn-danger "><i class="fas fa-trash"></i></button>
                                    </form>


                                </div>
                            @endif
                        </div>

                        <div class="rounded border">
                            <img src="{{$publicacao->animal->imagem}}" class="rounded" width="100%">
                        </div>

                        <div class="mt-3 mt-sm-4">
                            <a class="tag ">Pelagem é {{$publicacao->animal->pelagem}}</a>
                            <a class="tag"> É vacinado? {{$publicacao->animal->vacinacao}}</a>
                            <a class="tag ">Seu porte é {{$publicacao->animal->porte}}</a>
                            <a class="tag ">Seu pelo é {{$publicacao->animal->cor}}</a>
                            <a class="tag ">{{$publicacao->animal->sexo}}</a>
                            <a class="tag ">É castrado? {{$publicacao->animal->catracao}}</a>
                            <div class="mt-3 pb-2">
                                <a>{{$publicacao->animal->descricao}}</a>
                            </div>
                            <div class="mt-3 pb-2">
                                <a><i class="fas fa-map-marker-alt"></i> {{$publicacao->animal->endereco->rua}}</a>
                            </div>
                            <div class="mt-3 pb-2 ">
                                <i class="far fa-heart fa-2x border border-primary rounded-circle p-2" id="like{{$publicacao->id}}" onclick="like({{$publicacao->id}})"></i>

                                @foreach($interesses as $interesse)
                                    @if($interesse->id_publicacao == $publicacao->id && $usuario->id == $interesse->id_usuario)
                                        <i class="fas fa-heart fa-2x border border-primary rounded-circle p-2" id="like{{$interesse->id}}" onclick="deslike({{$interesse->id}})"></i>
                                        <script>
                                            $("#like{{$publicacao->id}}").remove();
                                        </script>
                                    @endif
                                @endforeach




                                <hr>
                                <div id="divComentarios{{$publicacao->id}}" class="p-2">

                                    @foreach($comentarios as $comentario)
                                        @if($comentario->id_publicacao == $publicacao->id)
                                            <div class="row">
                                                <div class="col-12 border p-2  mt-1" style="border-radius: 20px">
                                                    <img src="{{$comentario->usuario->imagem}}" width="50px" class="rounded-circle ">
                                                    <p class="col-12 text-break d-inline p-2"><b>{{$comentario->usuario->nome}}</b>: {{$comentario->conteudo}}</p>
                                                </div>
                                            </div>
                                        @endif

                                    @endforeach

                                </div>

                                @csrf
                                <input type="hidden" value="{{$publicacao->id}}" name="publicacao" id="id{{$publicacao->id}}">
                                <textarea class="rounded w-100" placeholder="Insira seu comentario aqui....." style="height: 150px;resize: none" name="conteudo" id="conteudo{{$publicacao->id}}"></textarea>
                                <input type="submit" value="Comentar" class="btn btn-outline-primary mb-5 col-sm-12 col-md-12 col-lg-12" onclick="comentar({{$publicacao->id}})">
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
                    function like(id){
                        var publicacao = $('#id'+id).val();
                        $.ajax({
                            url:'/interesses/'+publicacao,
                        }).done(
                            function (data) {
                                document.getElementById("like"+id).classList.remove("far");
                                document.getElementById("like"+id).classList.add("fas");
                                document.getElementById("like"+id).setAttribute('onClick'," deslike("+(data['novoInteresse'])+")");
                                document.getElementById("like"+id).id = "like"+((data['novoInteresse']));
                                var x = document.getElementById("snackbar");
                                x.className = "show";
                                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);


                            }
                        ).fail(
                            function () {
                                alert("erro");
                            }
                        );
                    }
                    function deslike(id){

                        $.ajax({
                            url:'/interesse/removerAjax/'+id,
                            method:'DELETE',
                            data: {
                                "_token": "{{ csrf_token() }}",
                            },
                        }).done(
                            function (data) {
                                console.log(data);
                                document.getElementById("like"+id).classList.remove("fas");
                                document.getElementById("like"+id).classList.add("far");
                                document.getElementById("like"+id).setAttribute('onClick'," like("+(data['novoInteresse'])+")");
                                document.getElementById("like"+id).id = "like"+((data['novoInteresse']));
                                var x = document.getElementById("snackbar2");
                                x.className = "show";
                                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                            }
                        ).fail(
                            function () {
                                alert("erro");
                            }
                        );
                    }
                    function comentar(id){
                        console.log(conteudo);
                        var publicacao = $('#id'+id).val();
                        var conteudo = $('#conteudo'+id).val();
                        console.log(conteudo);
                        $.ajax({
                            url:'/comentar/'+publicacao+'/'+conteudo,
                        }).done(
                            function (data) {
                                $("#divComentarios"+id).append(" <div class=\"row\"><div class=\"col-12 border p-2  mt-1\" style=\"border-radius: 20px\">  <img src=\"{{$usuario->imagem}}\" width=\"50px\" class=\"rounded-circle\"><p class='col-12 text-break d-inline p-2'><b>{{$usuario->nome}}</b>: "+conteudo+"</p> </div></div>");
                                $('#conteudo'+id).val("");

                            }
                        ).fail(
                            function () {
                                alert("erro ao comentar");
                            }
                        );
                    }
                </script>

            </div>
            <div id="snackbar">Animal adicionado aos interesses com sucesso</div>
            <div id="snackbar2">Animal removido dos interesses com sucesso</div>

        @endforeach
    @endforeach

@endsection
