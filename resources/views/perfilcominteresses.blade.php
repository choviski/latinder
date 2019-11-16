@extends("layouts/padrao")
@section("content")
    <style>
        .tag{
            border-style: solid;
            border-width: 2px;
            border-radius: 10px;
            padding: 2px 3px;
            border-color:  #0083ff;
            color: black;
        }
    </style>
    <div class="row">
        <div class="col-4 col-md-2 text-center bg-light border-top border-bottom border-right p-2   ">
            <img src="{{$usuario->imagem}}" class="rounded-circle border" width="80px">
            <p class="font-weight-bold">{{$usuario->nome}}</p>
        </div>
        <div class="col-4 col-md-5 text-center bg-light border-top border-bottom border-right border p-2"><a href="{{route("cadastrar")}}"><h5 class="mt-4 mt-md-3 text-muted">CADASTROS</h5></a></div>
        <div class="col-4 col-md-5 text-center bg-light border-top border-bottom border p-2"><a href="{{route("listar")}}"><h5 class="mt-4 mt-md-3 text-muted "><u>INTERESSES</u></h5></a></div>
    </div>
    <!-- ============ AQUI VÃO AS POSTAGENS ============ -->

    @foreach($interesses as $interesse)
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">

            <div  class="col-md-8 col-sm-10 col-lg-7 col-11 bg-light rounded-right shadow mt-md-2 mt-2 mb-5" style="border-top-left-radius: 50px;border-bottom-left-radius: 50px;" >
                <div class="col-12 text-muted p-2">
                    <a  href="visitar/{{$interesse->publicacao->usuario->id}}"><img class="rounded-circle border text" src="{{$interesse->publicacao->usuario->imagem}}" width="80px">
                    </a>
                        <a class="ml-3 mt-5" style="font-family: 'Roboto', sans-serif; font-size:30px "  href="visitar/{{$interesse->publicacao->usuario->id}}>{{$interesse->publicacao->usuario->nome}}</a>

                    <div class="border p-0 mt-1 mb-1" style="border-radius: 50px">
                        <p class="display-4 text-center">{{$interesse->publicacao->animal->nome}}</p>
                    </div>
                </div>
                <div class="rounded">
                    <img src="{{$interesse->publicacao->animal->imagem}}" class="rounded" width="100%">
                </div>
                <div class="mt-3">
                    <div class="mt-3">
                        <a class="tag">Pelagem é {{$interesse->publicacao->animal->pelagem}}</a>
                        <a class="tag"> É vacinado? {{$interesse->publicacao->animal->vacinacao}}</a>
                        <a class="tag">Seu porte é {{$interesse->publicacao->animal->porte}}</a>
                        <a class="tag">Seu pelo é {{$interesse->publicacao->animal->cor}}</a>
                        <a class="tag">{{$interesse->publicacao->animal->sexo}}</a>
                        <a class="tag">É castrado? {{$interesse->publicacao->animal->catracao}}</a>
                        <div class="mt-3 pb-2">
                            <a>{{$interesse->publicacao->animal->descricao}}</a>
                        </div>

                        <div class="mt-3 pb-2 mb-4">
                            <a><i class="fas fa-map-marker-alt"></i> {{$interesse->publicacao->animal->endereco->rua}}</a>
                        </div>

                </div>
            </div>


        </div>
    </div>
    @endforeach

@endsection
