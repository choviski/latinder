@extends('../layout')

@section('header')
    <h1 class="display-4">CADASTRO DE USUARIO ANIMAL</h1>
@endsection

@section('content')
    <form  action="{{Route('usuarioAnimal.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label  for="usuario">Id usuario:</label>
            <input type="number" class="form-control" id="usuario" placeholder="insira o id do Usuario" name="id_usuarios" required>

            <label  for="animal">Id animal:</label>
            <input type="number" class="form-control" id="animal" placeholder="insira o id do Animal" name="id_animais" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

@endsection
