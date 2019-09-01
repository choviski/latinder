@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">INTERESSE DE ID: {{$interesse->id}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightskyblue">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID PUBLICAÇÃO</th>
            <th scope="col">ID USUÁRIO</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$interesse->id}}</td>
            <td>{{$interesse->id_publicacao}}</td>
            <td>{{$interesse->id_usuario}}</td>
            <td>{{$interesse->created_at}}</td>
            <td>{{$interesse->updated_at}}</td>
            <td>{{$interesse->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/interesse"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



