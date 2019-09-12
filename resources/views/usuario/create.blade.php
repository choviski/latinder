
@section('header')
    <h1 class="display-4">CADASTRO DE USUÁRIO</h1>
@endsection
@extends(".layouts.iniciais")


@section('content')
    <div class=" p-2 bg-light rounded shadow text-center">
        <form action="{{route("storeUsuario")}}" method="post" class="form-group ">
            @csrf
            <input type="text" name="nome" class="form-control mt-2" placeholder="Nome" required>
            <input type="text" name="login" class="form-control mt-2" placeholder="Login" required>
            <input type="email" name="email" class="form-control mt-2" placeholder="E-mail" required>
            <input type="password" name="senha" class="form-control mt-2" placeholder="Senha" required>
            <input type="file" name="imagem" class="form-control mt-2" placeholder="Foto" >
            <input type="hidden" name="perfil" value="1" class="form-control mt-2" placeholder="Foto" >

            <input type="submit" value="Cadastrar" class="btn-block btn-primary rounded mt-2">

        </form>
        <a href="/">Voltar</a>

    </div>
@endsection
