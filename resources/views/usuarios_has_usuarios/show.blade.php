@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">{{$usuarios_has_usuario->id}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightskyblue">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID USUÁRIO 1</th>
            <th scope="col">ID USUÁRIO 2</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$usuarios_has_usuario->id}}</td>
            <td>{{$usuarios_has_usuario->id_usuario}}</td>
            <td>{{$usuarios_has_usuario->id_usuario2}}</td>
            <td>{{$usuarios_has_usuario->created_at}}</td>
            <td>{{$usuarios_has_usuario->updated_at}}</td>
            <td>{{$usuarios_has_usuario->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/usuarios_has_usuarios"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



