@extends('../layout')

@section('header')
    <h1 class="display-4">EDITAR USUARIO ANIMAL</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('usuarioAnimal.update',['usuario'=> $usuario->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label  for="usuario">Usuario:</label>

            <input type="text" class="form-control" id="usuario" value="{{$usuario->id_usuarios}}" name="id_usuarios" disabled>


            <label for="animal">Animal:</label>

            <input type="text" class="form-control" id="animal" value="{{$usuario->id_animais}}" name="id_animais" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

@endsection
