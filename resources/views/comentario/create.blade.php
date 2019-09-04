@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">CADASTRO DE COMENTÁRIO</h1>
@endsection

@section('content')
    <form  action="{{Route('comentario.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label  for="conteudo">Conteúdo:</label>
            <input type="text" class="form-control" id="conteudo" placeholder="Insira o conteúdo do comentário" name="conteudo" required>

            <label  for="id_usuario">ID do usuário:</label>
            <input type="number" class="form-control" id="id_usuario" placeholder="Insira o id do usuário" name="id_usuario" required>

            <label  for="id_publicacao">ID da publicação:</label>
            <input type="number" class="form-control" id="id_publicacao" placeholder="Insira o id da publicação" name="id_publicacao" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


@endsection
