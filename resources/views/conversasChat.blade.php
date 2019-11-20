@extends('/layouts/padrao')
@section('content')
    <div class="container-fluid mt-md-4 mt-sm-0">
        <div class="row d-flex justify-content-center ">
            <div class=" p-2 border col-8" style="background-color: rgba(255,255,255,0.8);border-radius: 25px">
                <p class="display-4 text-center">CONVERSAS</p>
                <hr>
                <!-- USUARIOS -->
                <a href="/chatTeste" class="text-decoration-none">
                <div class="mb-2 p-1" style="">
                    <img class="rounded-circle" src="../../../../imgs_perfil/foto_perfil1.png" width="100px">
                    <a  href="/chatTeste" class="ml-2 text-decoration-none text-dark" style="font-size: 20px"><b>Usuario 1</b> a respeito de <b>Jonas</b></a>
                </div>
                </a>
                <hr>
                <a  href="/chatTeste"  class="text-decoration-none">
                <div class="mb-2 p-1" style="">
                    <img class="rounded-circle" src="../../../../imgs_perfil/foto_perfil4.png" width="100px">
                    <a   href="/chatTeste" class="ml-2 text-decoration-none text-dark" style="font-size: 20px"><b>Usuario 3</b> a respeito de <b>Cacatua</b></a>
                </div>
                <hr>
                </a>

        </div>
        </div>
    </div>
@endsection
