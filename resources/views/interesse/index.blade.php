@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">INTERESSES</h1>
@endsection

@section('content')<ul class="list-group">
    <ul class="list-group">
        <a href="{{route("entidades")}}"><button class="btn btn-outline-secondary col-1 mb-2">VOLTAR</button></a>
        @foreach($interesses as $interesse)

            <li class="list-group-item align-items-center d-flex justify-content-between">ID #{{$interesse->id}} |
                ID Publicação: {{$interesse->id_publicacao}}
                <span class="d-flex">
                    <form method="get" action="/interesse/{{$interesse->id}}">
                        @csrf
                         <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                    </form>
                <form method="get" action="/interesse/{{$interesse->id}}/edit/">
                    @csrf
                    <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
                </form>
                <form method="post" action="/interesse/remover/{{$interesse->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$interesse->nome}} ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
                </span>
            </li>
        @endforeach
    </ul>
    <form method="get" action="{{route("interesse.create")}}">
        @csrf
        <button class="btn btn btn-outline-primary mt-2 col-1">Adicionar</button>
    </form>
@endsection
