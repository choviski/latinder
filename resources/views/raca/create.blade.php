@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">CADASTRO DE RAÇAS</h1>
@endsection

@section('content')
    <form  action="{{Route('raca.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label  for="nome">Nome:</label>
            <input type="number" class="form-control" id="nome" placeholder="insira o nome da raça" name="nome" required>

            <label  for="login">Id da espécie:</label>
            <input type="number" class="form-control" id="id_especies" placeholder="Insira o id da raça" name="id_especies" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


@endsection
