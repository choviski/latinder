@extends('../layout')

@section('header')
    <h1 class="display-4">EDITAR CIDADE</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('cidade.update',['cidade'=> $cidade->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">

            <label  for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" value="{{$cidade->nome}}" name="nome" required>

            <label  for="estado">Estado:</label>
            <input type="text" class="form-control" id="estado" value="{{$cidade->estado}}" name="estado" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

@endsection
