@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">{{$especie->nome}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightskyblue">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$especie->id}}</td>
            <td>{{$especie->nome}}</td>
            <td>{{$especie->created_at}}</td>
            <td>{{$especie->updated_at}}</td>
            <td>{{$especie->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/especie"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



