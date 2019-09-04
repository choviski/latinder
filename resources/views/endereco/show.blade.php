@extends('../layouts.cruds')

@section('header')
    <h1 class="display-4">{{$endereco->rua}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightskyblue">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">RUA</th>
            <th scope="col">BAIRRO</th>
            <th scope="col">CEP</th>
            <th scope="col">COMPLEMENTO</th>
            <th scope="col">ID_CIDADES</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$endereco->id}}</td>
            <td>{{$endereco->rua}}</td>
            <td>{{$endereco->bairro}}</td>
            <td>{{$endereco->cep}}</td>
            <td>{{$endereco->complemento}}</td>
            <td>{{$endereco->id_cidade}}</td>
            <td>{{$endereco->created_at}}</td>
            <td>{{$endereco->updated_at}}</td>
            <td>{{$endereco->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/endereco"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection




