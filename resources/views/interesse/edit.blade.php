@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">EDITAR INTERESSE</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('interesse.update',['interesse'=> $interesse->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label  for="id_publicacao">ID Publicação:</label>

            <input type="number" class="form-control" id="id_publicacao" value="{{$interesse->id_publicacao}}" name="id_publicacao" required>


            <label for="id_usuario">ID Usuário:</label>

            <input type="number" class="form-control" id="id_usuario" value="{{$interesse->id_usuario}}" name="id_usuario" >

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

@endsection
