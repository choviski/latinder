@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">CADASTRO DE RAÇAS</h1>
@endsection

@section('content')
    <form  action="{{Route('usuarios_has_usuarios.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label  for="id_usuario">Id Usuario:</label>
            <input type="text" class="form-control" id="id_usuario" placeholder="insira o nome da raça" name="id_usuario" required>

            <label  for="id_usuario2">Id Usuario 2:</label>
            <input type="text" class="form-control" id="id_usuarios" placeholder="insira o nome da raça" name="id_usuario2" required>


            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


@endsection
