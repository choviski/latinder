@extends('../layouts/cruds')
@section('header')
    <h1 class="display-4">CIDADE</h1>
@endsection

@section('content')<ul class="list-group">
    <ul class="list-group">
        @foreach($cidades as $cidade)

            <li class="list-group-item align-items-center d-flex justify-content-between">ID #{{$cidade->id}} |
                Nome: {{$cidade->nome}}
                <span class="d-flex">
                    <form method="get" action="/cidade/{{$cidade->id}}">
                        @csrf
                         <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                    </form>
                <form method="get" action="/cidade/{{$cidade->id}}/edit/">
                    @csrf
                    <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
                </form>
                <form method="post" action="/mensagem/remover/{{$cidade->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$cidade->nome}} ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
                </span>
            </li>
        @endforeach
    </ul>
    <form method="get" action="{{route("cidade.create")}}">
        @csrf
        <button class="btn btn btn-outline-primary mt-2 ">Adicionar</button>
    </form>
@endsection
