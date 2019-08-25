@extends('../layout')

@section('header')
    <h1 class="display-4">USUÁRIOS</h1>
@endsection

@section('content')<ul class="list-group">
    <ul class="list-group">
        @foreach($usuarios as $usuario)

            <li class="list-group-item align-items-center d-flex justify-content-between">ID #{{$usuario->id}} |
                Nome: {{$usuario->nome}}
                <span class="d-flex">
                    <form method="get" action="/usuario/{{$usuario->id}}">
                        @csrf
                         <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                    </form>
                <form method="get" action="/usuario/{{$usuario->id}}/edit/">
                    @csrf
                    <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
                </form>
                <form method="post" action="/usuario/remover/{{$usuario->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$usuario->nome}} ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
                </span>
            </li>
        @endforeach
    </ul>
    <form method="get" action="{{route("usuario.create")}}">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection
