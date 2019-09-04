@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">EDITAR ESPÉCIE</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('especie.update',['especie'=> $especie->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label  for="nome">Nome:</label>

            <input type="text" class="form-control" id="nome" value="{{$especie->nome}}" name="nome" required>



            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

@endsection
