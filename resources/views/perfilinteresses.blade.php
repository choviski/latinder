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
        .tag{
            border-style: solid;
            border-width: 2px;
            border-radius: 10px;
            padding: 2px 3px;
            border-color:  #0083ff;
            color: black;
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
    <div class="row">
        <div class="col-4 col-md-2 text-center bg-light border-top border-bottom border-right p-2   ">
            <a  href="visitar/{{$amigo->id}}"><img src="{{$amigo->imagem}}" class="rounded-circle border" width="80px">
            </a>
                <p class="font-weight-bold" href="visitar/{{$amigo->id}}">{{$amigo->nome}}</p>
        </div>
        <div class="col-4 col-md-5 text-center bg-light border-top border-bottom border-right border p-2"><a href="visitar/{{$amigo->id}}"><h5 class="mt-4 mt-md-3 text-muted">CADASTROS</h5></a></div>
        <div class="col-4 col-md-5 text-center bg-light border-top border-bottom border p-2"><a href="{{route("interessea")}}"><h5 class="mt-4 mt-md-3 text-muted "><u>INTERESSES</u></h5></a></div>
    </div>
    <!-- ============ AQUI VÃO AS POSTAGENS ============ -->

    @foreach($interesses as $interesse)
        <div class="container-fluid">
                        <div class="row d-flex justify-content-center">

                            <div class="col-md-8 col-sm-10 col-lg-6 col-11 bg-light rounded-right shadow mt-md-2 mt-2 mb-5"
                                 style="border-top-left-radius: 50px;border-bottom-left-radius: 50px;">
                                <div class="col-12 mt-2 text-muted p-2">
                                    <a href="visitar/{{$interesse->publicacao->usuario->id}}"> <img class="rounded-circle border text"
                                                                                                    src="{{$interesse->publicacao->usuario->imagem}}"
                                                                                                    width="80px"></a>
                                    <div class="col-lg-6 col-sm-4 col-md-6 col-4 d-inline-block mt-2">
                                        <a class="ml-3 mt-5 nomeUser" style="font-family: 'Roboto', sans-serif; word-break: break-word "
                                           href="visitar/{{$interesse->publicacao->usuario->id}}">{{$interesse->publicacao->usuario->nome}}</a>
                                    </div>
                                    <div class="d-inline-block  mt-2" style="margin-bottom: 0px">
                                        <p class="text-center ml-2 nomeAnimal">
                                            @if($interesse->publicacao->animal->nome=="")
                                                Sem nome
                                            @else
                                                {{$interesse->publicacao->animal->nome}}
                                            @endif
                                        </p>
                                    </div>

                                </div>
                                @if($usuario->id == $interesse->publicacao->usuario->id)
                                    <div class="float-right">

                                        <form method="post" action="/publicacao/remover/{{$interesse->publicacao->id}}"
                                              onsubmit="return confirm('Tem certeza que deseja excluir essa publicacao ?')">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-info" href="/animal/{{$interesse->publicacao->animal->id}}/edit/"><i
                                                        class="far fa-edit"></i></a>
                                            <button class="btn btn-danger "><i class="fas fa-trash"></i></button>
                                        </form>


                                    </div>
                                @endif
                                <div class="rounded border" style="position: relative">
                                    <img src="{{url($interesse->publicacao->animal->imagem)}}" class="rounded" width="100%"
                                         style=" min-height :300px; max-height:400px">
                                    <div class="mt-3 mt-sm-4 p-2 p-sm-0 p-md-1" style="position: absolute; bottom: -25px;">
                                        <p class="d-inline-block bg-primary text-light p-1 rounded " style="word-break: break-all;margin-top: 2px;margin-bottom: 0px">Pelagem é {{$interesse->publicacao->animal->pelagem}}</p>
                                        <p class="d-inline-block bg-primary text-light p-1 rounded " style="word-break: break-all;margin-top: 2px;margin-bottom: 0px"> É vacinado? {{$interesse->publicacao->animal->vacinacao}}</p>
                                        <p class="d-inline-block bg-primary text-light p-1 rounded " style="word-break: break-all;margin-top: 2px;margin-bottom: 0px">Seu porte é {{$interesse->publicacao->animal->porte}}</p>
                                        <p class="d-inline-block bg-primary text-light p-1 rounded " style="word-break: break-all;margin-top: 2px;margin-bottom: 0px">Seu pelo é {{$interesse->publicacao->animal->cor}}</p>
                                        <p class="d-inline-block bg-primary text-light p-1 rounded " style="word-break: break-all;margin-top: 2px;margin-bottom: 0px">{{$interesse->publicacao->animal->sexo}}</p>
                                        <p class="d-inline-block bg-primary text-light p-1 rounded " style="word-break: break-all;margin-top: 2px;margin-bottom: 0px">É castrado? {{$interesse->publicacao->animal->catracao}}</p>
                                        <div class="mt-3 pb-2">

                                        </div>

                                    </div>

                                </div>
                                <p class="mt-1"><b>Descrição: </b>{{$interesse->publicacao->animal->descricao}}</p>
                                <div class="mt-3 pb-2 mb-4">
                                    <a><i class="fas fa-map-marker-alt"></i> {{$interesse->publicacao->animal->endereco->rua}}, {{$interesse->publicacao->animal->endereco->complemento}} | {{$interesse->publicacao->animal->endereco->cidade->nome}} - {{$interesse->publicacao->animal->endereco->cidade->estado}}</a>
                                </div>
                            </div>
                        </div>
        </div>
    @endforeach

@endsection
