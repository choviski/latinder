@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">EDITAR COMENTÁRIO</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('comentario.update',['comentario'=> $comentario->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label  for="conteudo">Conteúdo:</label>

            <input type="text" class="form-control" id="conteudo" value="{{$comentario->conteudo}}" name="conteudo" required>


            <label for="id_usuario">ID do usuário:</label>

            <input type="number" class="form-control" id="id_usuario" value="{{$comentario->id_usuario}}" name="id_usuario" >


            <label for="id_publicacao">ID da publicação:</label>

            <input type="number" class="form-control" id="id_publicacao" value="{{$comentario->id_publicacao}}" name="id_publicacao" >


            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

@endsection
