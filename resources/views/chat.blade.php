
@extends('/layouts/padrao')
@section('content')
    <div class="container-fluid mt-md-4 mt-sm-0">
        <div class="row d-flex justify-content-center">
            <div class=" col-sm-4 col-md-8 rounded p-2 border" style="background-color: rgba(255,255,255,0.8)">
                    <div class="col-12">
                        <img class="rounded-circle border mr-2" src="{{url($destinatario->imagem)}}" width="80px">
                        <a class="text-left" style="font-size: 25px"><b>{{$destinatario->nome}}</b> a respeito de {{$publicacao->animal->nome}}</a>
                    </div>
                <hr>
                @foreach($mensagens as $mensagem)
                    @if($mensagem->id_destinatario == $usuario->id)
                <div class="col-12" style="min-height: 50px"> <!-- Inicio das mensagens -->
                    <div class=" mt-2 float-left text-left">
                        <div class="text-break "><a class="  p-1 rounded" style="background-color: #ff88f4"><b></b> {{$mensagem->created_at}}</a></div>
                        <div class="text-break "><a class="  p-1 rounded" style="background-color: #ff88f4"><b>{{$mensagem->remetente->nome}}:</b> {{$mensagem->conteudo}}</a></div>

                    </div>
                </div>
                    @endif
                        @if($mensagem->id_remetente == $usuario->id)
                        <div class="col-12" style="min-height: 50px">
                    <div class=" mt-2 float-right text-right">
                        <div class="text-break "><a class="bg-primary  p-1 rounded">{{$mensagem->created_at}}</a></div>
                        <div class="text-break "><a class="bg-primary  p-1 rounded">{{$mensagem->conteudo}}</a></div>
                    </div>
                </div>
                    @endif

            @endforeach
                <!-- Mandar a mensagem -->
                <div>
                    <form action="{{route("fala")}}" class="form-group" method="post">
                        @csrf
                        <textarea class="form-control " style=" resize: none;" name="mensagem">Enviar mensagem...</textarea>
                        <input type="hidden" value="{{$destinatario->id}}" name="destinatario">
                        <input type="hidden" value="{{$remetente->id}}" name="remetente">
                        <input type="hidden" value="{{$publicacao->id}}" name="publicacao">
                        <input type="submit" class="btn btn-outline-primary btn-block mt-2">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

