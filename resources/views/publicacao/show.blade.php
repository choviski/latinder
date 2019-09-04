@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">Publicação número: {{$publicacao->id}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightskyblue">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CONTEÚDO</th>
            <th scope="col">ID USUÁRIO</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$publicacao->id}}</td>
            <td>{{$publicacao->conteudo}}</td>
            <td>{{$publicacao->id_usuario}}</td>
            <td>{{$publicacao->created_at}}</td>
            <td>{{$publicacao->updated_at}}</td>
            <td>{{$publicacao->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/publicacao"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



