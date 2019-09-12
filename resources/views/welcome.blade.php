@extends('/layouts/iniciais')

@section('content')
<div class=" p-2 bg-light rounded shadow text-center">
    <form action="/login" method="post" class="form-group ">
        @csrf
        <input type="text" name="login" class="form-control mt-2" placeholder="Login" required>
        <input type="password" name="senha" class="form-control mt-2" placeholder="Senha" required>
        <input type="submit" value="Entrar" class="btn-block btn-primary rounded mt-2">
        <a href="#">Esqueci minha senha</a>
    </form>
    <a href="{{route('cadastroUsuario')}}"><button  class="btn-block btn-primary rounded">Cadastrar-se</button></a>
    @if(!empty($mensagem))
        <div class="alert alert-danger mt-2">
            {{$mensagem}}
        </div>
    @endif
</div>
@endsection
