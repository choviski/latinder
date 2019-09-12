
@extends('../layouts/cruds')


@section('header')
    <h1 class="display-4">EDITAR USUARIO</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('usuario.update',['usuario'=> $usuario->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">

            <label  for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" value="{{$usuario->nome}}" name="nome" required>

            <label  for="login">Login:</label>
            <input type="text" class="form-control" id="login" value="{{$usuario->login}}" name="login" required>


            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" value="{{$usuario->email}}" name="email" requiredS>


            <label  for="senha">Senha:</label>
            <input type="password" class="form-control" id="senha" value="{{$usuario->senha}}"name="senha" required>

            <label  for="perfil">Perfil:</label>
            <input type="number" min="1" max="2" class="form-control" id="perfil" value="{{$usuario->perfil}}"name="perfil" required>


            <label  for="img">Imagem:</label>
            <input type="file" class="form-control" id="img" value="{{$usuario->nome}}" name="imagem">


            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

@endsection
