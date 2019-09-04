@extends('../layouts.cruds')

@section('header')
    <h1 class="display-4">CADASTRO DE ENDEREÇO</h1>
@endsection

@section('content')
    <form  action="{{Route('endereco.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label  for="rua">Rua:</label>
            <input type="text" class="form-control" id="rua" placeholder="insira o nome da rua" name="rua" required>

            <label  for="bairro">Bairro:</label>
            <input type="text" class="form-control" id="bairro" placeholder="insira o bairro" name="bairro" required>

            <label  for="compl">Complemento:</label>
            <input type="text" class="form-control" id="compl" placeholder="insira o complemento" name="complemento" required>

            <label  for="cep">CEP:</label>
            <input type="text" class="form-control" id="cep" placeholder="insira o CEP" name="cep" required>

            <label  for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" placeholder="insira o id da Cidade" name="id_cidade" required>



            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


@endsection
