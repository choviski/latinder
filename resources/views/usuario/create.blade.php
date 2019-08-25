@extends('../layout')

@section('header')
    <h1 class="display-4">CADASTRO DE USUÁRIO</h1>
@endsection

@section('content')
    <form  action="{{Route('usuario.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label  for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="insira o seu nome" name="nome" required>

            <label  for="login">Login:</label>
            <input type="text" class="form-control" id="login" placeholder="insira o login" name="login" required>


            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" placeholder="insira o e-mail" name="email" required>

            <label  for="senha">Senha:</label>
            <input type="password" class="form-control" id="senha" placeholder="insira a senha" name="senha" required>

            <label  for="img">Foto:</label>
            <input type="file" class="form-control" id="img" placeholder="insira a sua foto" name="imagem" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


@endsection
