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
            <a  href="visitar/{{$usuario->id}}"> <img src="{{$usuario->imagem}}" class="rounded-circle border" width="80px">
                <p class="font-weight-bold">{{$usuario->nome}}</p></a>
        </div>
        <div class="col-4 col-md-5 text-center bg-light border-top border-bottom border-right border p-2"><a href="{{route("cadastrar")}}"><h5 class="mt-4 mt-md-3 text-muted"><u>CADASTROS</u></h5></a></div>
        <div class="col-4 col-md-5 text-center bg-light border-top border-bottom border p-2"><a href="{{route("listar")}}"><h5 class="mt-4 mt-md-3 text-muted ">INTERESSES</h5></a></div>
    </div>
<!-- ============ AQUI VÃO AS POSTAGENS ============ -->
    @foreach($publicacaos as $publicacao)
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div  class="col-md-8 col-sm-10 col-lg-7 col-11 bg-light rounded-right shadow mt-md-2 mt-2 mb-5" style="border-top-left-radius: 50px;border-bottom-left-radius: 50px;" >
                    <div class="col-12 mt-2 text-muted p-2">
                        <div class="border p-0 mt-1 mb-1" style="border-radius: 50px">
                            <p class="display-4 text-center">
                                @if($publicacao->animal->nome=="")
                                    Sem nome
                                @else
                                    {{$publicacao->animal->nome}}
                                @endif
                            </p>
                        </div>
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
                        <div class="mt-3 pb-2 mb-5">
                            <a><i class="fas fa-map-marker-alt"></i> {{$publicacao->animal->endereco->rua}}</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>

@endforeach
@endsection
