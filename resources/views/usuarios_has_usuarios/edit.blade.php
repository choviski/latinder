@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">EDITAR RELAÇÃO ENTRE USUÁRIOS</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('usuarios_has_usuarios.update',['usuarios_has_usuarios'=> $usuarios_has_usuario->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label  for="id_usuario">ID Usuario:</label>

            <input type="text" class="form-control" id="id_usuario" value="{{$usuarios_has_usuario->usuario}}" name="id_usuario" required>
            <label  for="id_usuario2">ID Usuario 2:</label>

            <input type="text" class="form-control" id="id_usuario2" value="{{$usuarios_has_usuario->usuario2}}" name="id_usuario2" required>



            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

@endsection
