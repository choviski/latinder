@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">EDITAR PUBLICAÇÕES</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('publicacao.update',['publicacao'=> $publicacao->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label  for="conteudo">Conteúdo:</label>

            <input type="text" class="form-control" id="conteudo" value="{{$publicacao->conteudo}}" name="conteudo" required>


            <label for="id_usuario">Id Usuário:</label>

            <input type="number" class="form-control" id="id_usuario" value="{{$publicacao->id_usuario}}" name="id_usuario" >

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

@endsection
