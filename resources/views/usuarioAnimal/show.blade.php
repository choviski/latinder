@extends('../layout')

@section('header')
    <h1 class="display-4">{{$usuario->id_usuario}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightgreen">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID_USUARIO</th>
            <th scope="col">ID_ANIMAL</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->id_usuarios}}</td>
            <td>{{$usuario->id_animais}}</td>
            <td>{{$usuario->created_at}}</td>
            <td>{{$usuario->updated_at}}</td>
            <td>{{$usuario->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/usuarioAnimal"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



