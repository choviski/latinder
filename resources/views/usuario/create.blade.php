
@section('header')
    <h1 class="display-4">CADASTRO DE USUÁRIO</h1>
@endsection
@extends(".layouts.iniciais")


@section('content')
  <script>
       function imagem1() {
          document.getElementById("imagem").value = "../../../imgs_perfil/foto_perfil1.png";
          document.getElementById("img1").style.border = "1px solid black"
          document.getElementById("img2").style.border = "0px"
      }
      function imagem2() {
          document.getElementById("imagem").value = "../../../imgs_perfil/foto_perfil2.png";
          document.getElementById("img2").style.border = "1px solid black"
          document.getElementById("img1").style.border = "0px"
      }
  </script>
    <div class=" p-2 bg-light rounded shadow text-center">
        <form action="{{route("storeUsuario")}}" method="post" class="form-group ">
            @csrf
            <input type="text" name="nome" class="form-control mt-2" placeholder="Nome" required>
            <input type="text" name="login" class="form-control mt-2" placeholder="Login" required>
            <input type="email" name="email" class="form-control mt-2" placeholder="E-mail" required>
            <input type="password" name="senha" class="form-control mt-2" placeholder="Senha" required>
            <p class="text-center mt-1 font-weight-bold">Escolha uma foto de perfil:</p>
            <a onclick="imagem1()" class="col-md-5 col-sm-12 mt-1  btn btn-light rounded">
                <div class="view overlay zoom" id="img1" >
                    <img class="img-fluid rounded-circle " src="../../../imgs_perfil/foto_perfil1.png"  width="200px">
                </div>
            </a>
            <a onclick="imagem2()" class="col-md-5 col-sm-12 mt-1  btn btn-light rounded">
                <div class="view overlay zoom" id="img2">
                    <img class="img-fluid rounded-circle " src="../../../imgs_perfil/foto_perfil2.png"  width="200px">
                </div>
            </a>
            <div class="col-md-6 col-sm-12"></div>

            <input type="hidden" name="imagem" id="imagem" value="" class="form-control mt-2" >
            <input type="hidden" name="perfil" value="1" class="form-control mt-2" placeholder="Foto" >

            <input type="submit" value="Cadastrar" class="btn-block btn-primary rounded mt-2">

        </form>
        <a href="/">Voltar</a>

    </div>
@endsection
