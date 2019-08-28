@extends('../layout')

@section('header')
    <h1 class="display-4">'CADASTRO' DE MENSAGEM</h1>
@endsection

@section('content')
    <form  action="{{Route('mensagem.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label  for="conteudo">Conteudo:</label>
            <input type="text" class="form-control" id="conteudo" placeholder="insira a sua mensagem" name="conteudo" required>

            <label  for="destinatario">Destinatario:</label>
            <input type="text" class="form-control" id="destinatario" placeholder="insira o id do destinatario" name="id_destinatario" required>


            <label for="remetente">Remetente:</label>
            <input type="text" class="form-control" id="remetente" placeholder="insira o id do remetente" name="id_remetente" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


@endsection
