<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
@extends('/layouts/padraohome')
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
    </style>
    <a href="{{route("animal.create")}}"> <img class="butn-cad" src="../images/cadastrar.png" width="100px"; alt="Cadastrar animal"> </a>
    @foreach($publicacoes as $publicacao)
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <!-- INICIO DO CORPO DA POSTAGEM -->
            <div class="col-md-8 col-sm-10 col-lg-7 col-11 bg-light rounded shadow mt-md-2 mt-2 mb-1">
                <div class="col-12 text-muted p-2">
                    <img class="rounded-circle border text" src="{{$publicacao->usuario->imagem}}" width="80px">
                    <a class="ml-3 mt-5" style="font-family: 'Roboto', sans-serif; font-size:30px ">{{$publicacao->usuario->nome}}</a>
                    {{$publicacao->tempo}}
                    <form method="post" action="/publicacao/remover/{{$publicacao->id}}" onsubmit="return confirm('Tem certeza que deseja excluir essa publicacao ?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </div>
                <div class="rounded">
                    <img src="{{$publicacao->animal->imagem}}" class="rounded" width="100%">
                </div>
                <div class="mt-3">
                    <a class="tag">Pelagem é {{$publicacao->animal->pelagem}}</a>
                    <a class="tag"> É vacinado? {{$publicacao->animal->vacinacao}}</a>
                    <a class="tag">Seu porte é {{$publicacao->animal->porte}}</a>
                    <a class="tag">Seu pelo é {{$publicacao->animal->cor}}</a>
                    <a class="tag">{{$publicacao->animal->sexo}}</a>
                    <a class="tag">É castrado? {{$publicacao->animal->catracao}}</a>
                    <div class="mt-3 pb-2">
                        <a>{{$publicacao->animal->descricao}}</a>
                    </div>
                    <div class="mt-3 pb-2">
                        <a><i class="fas fa-map-marker-alt"></i> {{$publicacao->animal->endereco->rua}}</a>
                    </div>
                    <div class="mt-3 pb-2 ">

                            <i class="far fa-heart fa-2x border border-primary rounded-circle p-2" id="like{{$publicacao->id}}" onclick="like({{$publicacao->id}})"></i>

         @foreach($comentarios as $comentario)
                        @if($comentario->id_publicacao == $publicacao->id)
                            <div><img src="{{$comentario->usuario->imagem}}" width="50px" class="rounded-circle">{{$comentario->usuario->nome}}:{{$comentario->conteudo}}</div>
                                <form method="post" action="/comentario/remover/{{$comentario->id}}" onsubmit="return confirm('Tem certeza que deseja excluir seu comentario?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            @endif

                    @endforeach
                        @csrf
                        <input type="hidden" value="{{$publicacao->id}}" name="publicacao" id="id{{$publicacao->id}}">
        <textarea class="rounded w-100" placeholder="Insira seu comentario aqui....." style="height: 150px;" name="conteudo" id="conteudo{{$publicacao->id}}"></textarea>
                        <input type="submit" value="Comentar" class="btn btn-outline-primary mb-3 col-sm-12 col-md-12 col-lg-12" onclick="comentar({{$publicacao->id}})">
</form>
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
            function () {
                document.getElementById("like"+id).classList.remove("far");
                document.getElementById("like"+id).classList.add("fas");

            }
        ).fail(
            function () {
                alert("erro");
            }
        );
    }
    function comentar(id){
        var publicacao = $('#id'+id).val();
        var conteudo = $('#conteudo'+id).val();
        $.ajax({
            url:'/comentar/'+publicacao+'/'+conteudo,
        }).done(
            function (data) {
               alert("vc comentou....eeeeee")
            }
        ).fail(
            function () {
                alert("erro");
            }
        );
    }
</script>
    </div>
@endforeach

@endsection
