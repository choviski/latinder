@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">{{$mensagem->conteudo}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightskyblue">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CONTEUDO</th>
            <th scope="col">DESTINATARIO</th>
            <th scope="col">REMETENTE</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$mensagem->id}}</td>
            <td>{{$mensagem->conteudo}}</td>
            <td>{{$mensagem->id_destinatario}}</td>
            <td>{{$mensagem->id_remetente}}</td>
            <td>{{$mensagem->created_at}}</td>
            <td>{{$mensagem->updated_at}}</td>
            <td>{{$mensagem->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/mensagem"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



