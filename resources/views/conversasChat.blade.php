@extends('/layouts/padrao')
@section('content')
    <div class="container-fluid mt-md-4 mt-sm-0">
        <div class="row d-flex justify-content-center ">
            <div class=" p-2 border col-8" style="background-color: rgba(255,255,255,0.8);border-radius: 25px">
                <p class="display-4 text-center">CONVERSAS</p>
                <hr>
                <!-- USUARIOS -->
                @foreach($conversas as $conversa)
                    @if($conversa->usuario->id==$usuario->id)

                        <a href="{{route("conversa",$conversa->id)}}" class="text-decoration-none">
                            <div class="mb-2 p-1" style="">
                                <img class="rounded-circle" src="{{url($conversa->usuario2->imagem)}}" width="100px">
                                <a  href="{{route("conversa",$conversa->id)}}" class="ml-2 text-decoration-none text-dark" style="font-size: 20px"><b>{{$conversa->usuario2->nome}}</b> </a>
                            </div>
                        </a>

                    <hr>
                    @elseif($conversa->usuario2->id==$usuario->id)
                        <a href="{{route("conversa",$conversa->id)}}" class="text-decoration-none">
                            <div class="mb-2 p-1" style="">
                                <img class="rounded-circle" src="{{url($conversa->usuario->imagem)}}" width="100px">
                                <a  href="{{route("conversa",$conversa->id)}}" class="ml-2 text-decoration-none text-dark" style="font-size: 20px"><b>{{$conversa->usuario->nome}}</b> </a>
                            </div>
                        </a>
                        <hr>
                    @endif
                @endforeach
        </div>
        </div>
    </div>
@endsection
