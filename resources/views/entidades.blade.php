@extends('layouts/padrao')
@section('content')
    <div class="container-fluid">
        <div class="row text-light text-center d-flex justify-content-center">



            <div class="col-md-9 col-sm12 rounded mb-2 ml-md-1  pt-4 mt-3 text-center shadow-md  btn btn-outline-primary rounded" style="height: 150px">
                <a href="/dashboard" class="text-light">
                    <i class="fas fa-chart-line fa-3x"></i>
                    <h4 class="mt-2">Dashboard</h4>
                </a>
            </div>

            <div class="col-md-3 col-sm12 rounded mb-2 ml-md-1  pt-4 mt-3 text-center shadow-md  btn btn-outline-primary rounded" style="height: 150px">
                <a href="animal" class="text-light">
                    <i class="fas fa-cat fa-3x"></i>
                    <h4 class="mt-2">Animais</h4>
                </a>
            </div>

            <div class="col-md-3 col-sm12 rounded mb-2 ml-md-1  pt-4 mt-3 text-center shadow-md  btn btn-outline-primary rounded" style="height: 150px">
                <a href="cidade" class="text-light">
                    <i class="fas fa-city fa-3x"></i>
                    <h4 class="mt-2">Cidades</h4>
                </a>
            </div>

            <div class="col-md-3 col-sm12 rounded mb-2 ml-md-1 pt-4 mt-3 text-center shadow-md  btn btn-outline-primary rounded" style="height: 150px">
                <a href="comentario" class="text-light">
                    <i class="fas fa-comment fa-3x"></i>
                    <h4 class="mt-2">Comentários</h4>
                </a>
            </div>

            <div class="col-md-3 col-sm12 rounded mb-2 ml-md-1 pt-4 mt-3 text-center shadow-md  btn btn-outline-primary rounded" style="height: 150px">
                <a href="endereco" class="text-light">
                    <i class="fas fa-map-marker-alt fa-3x"></i>
                    <h4 class="mt-2">Endereços</h4>
                </a>
            </div>

            <div class="col-md-3 col-sm12 rounded mb-2 ml-md-1 pt-4 mt-3 text-center shadow-md  btn btn-outline-primary rounded" style="height: 150px">
                <a href="especie" class="text-light">
                    <i class="fas fa-tree fa-3x"></i>
                    <h4 class="mt-2">Espécies</h4>
                </a>
            </div>

            <div class="col-md-3 col-sm12 rounded mb-2 ml-md-1 pt-4 mt-3 text-center shadow-md  btn btn-outline-primary rounded" style="height: 150px">
                <a href="interesse" class="text-light">
                    <i class="fas fa-tasks fa-3x"></i>
                    <h4 class="mt-2">Interesses</h4>
                </a>
            </div>

            <div class="col-md-3 col-sm12 rounded mb-2 ml-md-1 pt-4 mt-3 text-center shadow-md  btn btn-outline-primary rounded" style="height: 150px">
                <a href="mensagem" class="text-light">
                    <i class="fas fa-envelope fa-3x"></i>
                    <h4 class="mt-2">Mensagens</h4>
                </a>
            </div>

            <div class="col-md-3 col-sm12 rounded mb-2 ml-md-1 pt-4 mt-3 text-center shadow-md  btn btn-outline-primary rounded" style="height: 150px">
                <a href="publicacao" class="text-light">
                    <i class="fas fa-upload fa-3x"></i>
                    <h4 class="mt-2">Publicação</h4>
                </a>
            </div>

            <div class="col-md-3 col-sm12 rounded mb-2 ml-md-1 pt-4 mt-3 text-center shadow-md  btn btn-outline-primary rounded" style="height: 150px">
                <a href="raca" class="text-light">
                    <i class="fas fa-hippo fa-3x"></i>
                    <h4 class="mt-2">Raças</h4>
                </a>
            </div>

            <div class="col-md-3 col-sm12 rounded mb-2 ml-md-1 pt-4 mt-3 text-center shadow-md  btn btn-outline-primary rounded" style="height: 150px">
                <a href="usuario" class="text-light">
                    <i class="fas fa-users fa-3x"></i>
                    <h4 class="mt-2">Usuários</h4>
                </a>
            </div>

            <div class="col-md-3 col-sm12 rounded mb-2 ml-md-1 pt-4 mt-3 text-center shadow-md  btn btn-outline-primary rounded" style="height: 150px">
                <a href="usuarioAnimal" class="text-light">
                    <i class="fas fa-user fa-3x"></i>
                    <i class="fas fa-dog fa-3x"></i>
                    <h4 class="mt-2">Usuários/Animais</h4>
                </a>
            </div>

            <div class="col-md-3 col-sm12 rounded mb-2 ml-md-1 pt-4 mt-3 text-center shadow-md  btn btn-outline-primary rounded" style="height: 150px">
                <a href="usuarios_has_usuarios" class="text-light">
                    <i class="fas fa-user-friends fa-3x"></i>
                    <h4 class="mt-2">Usuários/Usuários</h4>
                </a>
            </div>
        </div>
    </div>
@endsection
