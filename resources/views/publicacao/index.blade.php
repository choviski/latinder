@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">PUBLICAÇÃOES</h1>
@endsection

@section('content')<ul class="list-group">
    <ul class="list-group">
        @foreach($publicacaos as $publicacao)

            <li class="list-group-item align-items-center d-flex justify-content-between">ID #{{$publicacao->id}} |
                ID Usuário: {{$publicacao->id_usuario}}
                <span class="d-flex">
                    <form method="get" action="/publicacao/{{$publicacao->id}}">
                        @csrf
                         <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                    </form>
                <form method="get" action="/publicacao/{{$publicacao->id}}/edit/">
                    @csrf
                    <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
                </form>
                <form method="post" action="/publicacao/remover/{{$publicacao->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$publicacao->id}} ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
                </span>
            </li>
        @endforeach
    </ul>
    <form method="get" action="{{route("publicacao.create")}}">
        @csrf
        <button class="btn btn btn-outline-primary mt-2 ">Adicionar</button>
    </form>
@endsection
