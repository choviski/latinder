@extends('../layout')

@section('header')
    <h1 class="display-4">EDITAR ENDEREÇO</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('endereco.update',['endereco'=> $endereco->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label  for="rua">Rua:</label>

            <input type="text" class="form-control" id="rua" value="{{$endereco->rua}}" name="rua" required>


            <label for="bairro">Bairro:</label>

            <input type="text" class="form-control" id="bairro" value="{{$endereco->bairro}}" name="bairro" required>


            <label  for="cep">CEP:</label>

            <input type="text" class="form-control" id="cep" value="{{$endereco->cep}}"name="cep" required>

            <label  for="complemento">Complemento:</label>
            <input type="text" class="form-control" id="complemento" value="{{$endereco->complemento}}"name="complemento" required>

            <label  for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" value="{{$endereco->id_cidade}}"name="id_cidade" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

@endsection
