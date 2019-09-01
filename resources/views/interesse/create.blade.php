@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">CADASTRO DE INTERESSE</h1>
@endsection

@section('content')
    <form  action="{{Route('interesse.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label  for="id_publicacao">ID Publicação:</label>
            <input type="number" class="form-control" id="id_publicacao" placeholder="insira o id da publicação" name="id_publicacao" required>

            <label  for="id_usuario">Id da usuário:</label>
            <input type="number" class="form-control" id="id_usuario" placeholder="Insira o id do usuário" name="id_usuario" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


@endsection
