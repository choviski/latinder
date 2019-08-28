@extends('/layouts/iniciais')

@section('content')
<div class=" p-2 bg-light rounded shadow text-center">
    <form action="home" method="#" class="form-group ">
        <input type="text" name="login" class="form-control mt-2" placeholder="Login" required>
        <input type="text" name="senha" class="form-control mt-2" placeholder="Senha" required>
        <input type="submit" value="Entrar" class="btn-block btn-primary rounded mt-2">
        <a href="#">Esqueci minha senha</a>
    </form>
    <a href="/cadastro"><button  class="btn-block btn-primary rounded">Cadastrar-se</button></a>
</div>
@endsection
