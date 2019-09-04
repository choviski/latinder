@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">CADASTRO DE CIDADE</h1>
@endsection

@section('content')
    <form  action="{{Route('cidade.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label  for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="insira o nome da cidade" name="nome" required>

            <label  for="estado">Estado:</label>
            <input type="text" class="form-control" id="estado" placeholder="insira o estado" name="estado" required>


            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


@endsection
