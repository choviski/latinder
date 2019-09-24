
@extends('../layouts/cruds')


@section('header')
    <h1 class="display-4">EDITAR USUARIO</h1>
@endsection

@section('content')
    <script>
        function imagem1() {
            document.getElementById("imagem").value = "../../../imgs_perfil/foto_perfil1.png";
        }
        function imagem2() {
            document.getElementById("imagem").value = "../../../imgs_perfil/foto_perfil2.png";
        }

    </script>
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

            <p class="text-center mt-1 font-weight-bold">Foto de perfil:</p>
            <div class="d-flex justify-content-center">
                <a onclick="imagem1()" class="col-md-5 col-sm-12 mt-1  btn btn-light rounded">
                    <div class="view overlay zoom" >
                        <img class="img-fluid rounded-circle " src="../../../imgs_perfil/foto_perfil1.png"  width="200px">
                    </div>
                </a>
                <a onclick="imagem2()" class="col-md-5 col-sm-12 mt-1  btn btn-light rounded">
                    <div class="view overlay zoom" >
                        <img class="img-fluid rounded-circle " src="../../../imgs_perfil/foto_perfil2.png"  width="200px">
                    </div>
                </a>
            </div>
            <input type="hidden" class="form-control"  id="imagem" value="{{$usuario->imagem}}" name="imagem">


            <input type="submit" class="btn-block btn-primary mt-2 ">

        </div>
    </form>

@endsection
