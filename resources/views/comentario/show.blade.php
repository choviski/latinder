@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">Comentário de ID: {{$comentario->id}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightskyblue">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CONTEÚDO</th>
            <th scope="col">ID USUÁRIO</th>
            <th scope="col">ID PUBLICAÇÃO</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$comentario->id}}</td>
            <td>{{$comentario->conteudo}}</td>
            <td>{{$comentario->id_usuario}}</td>
            <td>{{$comentario->id_publicacao}}</td>
            <td>{{$comentario->created_at}}</td>
            <td>{{$comentario->updated_at}}</td>
            <td>{{$comentario->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/comentario"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



