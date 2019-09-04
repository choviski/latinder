@extends('/layouts/iniciais')

@section('content')
    <div class=" p-2 bg-light rounded shadow text-center">
        <form action="#" method="#" class="form-group ">
            <input type="text" name="nome" class="form-control mt-2" placeholder="Nome" required>
            <input type="text" name="login" class="form-control mt-2" placeholder="Login" required>
            <input type="text" name="email" class="form-control mt-2" placeholder="E-mail" required>
            <input type="text" name="senha" class="form-control mt-2" placeholder="Senha" required>
            <input type="file" name="foto" class="form-control mt-2" placeholder="Foto" required>
            <input type="submit" value="Cadastrar" class="btn-block btn-primary rounded mt-2">

        </form>
        <a href="/">Voltar</a>

    </div>
@endsection
