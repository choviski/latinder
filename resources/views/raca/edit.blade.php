@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">EDITAR RAÇA</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('raca.update',['raca'=> $raca->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label  for="nome">Nome:</label>

            <input type="text" class="form-control" id="nome" value="{{$raca->nome}}" name="nome" required>


            <label for="id_especie">Id Espécie:</label>

            <input type="number" class="form-control" id="id_especies" value="{{$raca->id_especies}}" name="id_especies" >

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

@endsection
