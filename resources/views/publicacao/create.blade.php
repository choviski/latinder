@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">CADASTRO DE PUBLICAÇÃO</h1>
@endsection

@section('content')
    <form  action="{{Route('publicacao.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label  for="conteudo">Conteúdo:</label>
            <input type="text" class="form-control" id="conteudo" placeholder="Insira o conteúdo da publicação" name="conteudo" required>

            <label  for="id_usuario">Id da espécie:</label>
            <input type="number" class="form-control" id="id_especies" placeholder="Insira o id do usuário" name="id_usuario" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


@endsection
