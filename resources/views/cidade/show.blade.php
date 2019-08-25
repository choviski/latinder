@extends('../layout')

@section('header')
    <h1 class="display-4">{{$cidade->nome}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightgreen">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">ESTADO</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$cidade->id}}</td>
            <td>{{$cidade->nome}}</td>
            <td>{{$cidade->estado}}</td>
            <td>{{$cidade->created_at}}</td>
            <td>{{$cidade->updated_at}}</td>
            <td>{{$cidade->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/cidade"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



