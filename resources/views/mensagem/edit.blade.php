@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">EDITAR MENSAGEM</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('mensagem.update',['mensagem'=> $mensagem->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label  for="conteudo">Conteudo:</label>

            <input type="text" class="form-control" id="conteudo" value="{{$mensagem->conteudo}}" name="conteudo" required>


            <label for="remetente">Remetente:</label>

            <input type="number" class="form-control" id="remetente" value="{{$mensagem->id_remetente}}" name="id_remetente" disabled>


            <label  for="destinatario">Destinatario:</label>

            <input type="number" class="form-control" id="destinatario" value="{{$mensagem->id_destinatario}}"name="id_destinatario" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

@endsection
