@extends('../layout')

@section('header')
    <h1 class="display-4">ENDEREÇO</h1>
@endsection

@section('content')<ul class="list-group">
    <ul class="list-group">
        @foreach($enderecos as $endereco)

            <li class="list-group-item align-items-center d-flex justify-content-between">ID #{{$endereco->id}} |
                Rua: {{$endereco->rua}}
                <span class="d-flex">
                    <form method="get" action="/endereco/{{$endereco->id}}">
                        @csrf
                         <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                    </form>
                <form method="get" action="/endereco/{{$endereco->id}}/edit/">
                    @csrf
                    <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
                </form>
                <form method="post" action="/endereco/remover/{{$endereco->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$endereco->rua}} ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
                </span>
            </li>
        @endforeach
    </ul>
    <form method="get" action="{{route("endereco.create")}}">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection
