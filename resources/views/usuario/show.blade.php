@extends('../layouts/cruds')
@section('header')
    <h1 class="display-4">{{$usuario->nome}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightskyblue">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">LOGIN</th>
            <th scope="col">SENHA</th>
            <th scope="col">E-MAIL</th>
            <th scope="col">PERFIL</th>
            <th scope="col">IMAGEM</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->nome}}</td>
            <td>{{$usuario->login}}</td>
            <td>{{$usuario->senha}}</td>
            <td>{{$usuario->email}}</td>

            @if( $usuario->perfil == 2)
                <td>ADMINISTRADOR</td>
                @else
                <td>USUÁRIO</td>
                @endif
            <td>{{$usuario->imagem}}</td>
            <td>{{$usuario->created_at}}</td>
            <td>{{$usuario->updated_at}}</td>
            <td>{{$usuario->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/usuario"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



