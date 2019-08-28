@extends('/layouts/padraohome')
@section('content')
    <style>
        .butn-cad{width: 12%; background-image: url(../imgs/icons/cadastrar.png);background-repeat: no-repeat; background-size: cover; position: fixed;bottom: 5%;right: 5%;z-index: 5;opacity:0.5;}
        .butn-cad:hover{opacity: 1}
        .tag{
            border-style: solid;
            border-width: 2px;
            border-radius: 10px;
            padding: 2px 3px;
            border-color:  #0083ff;
            color: black;
        }
    </style>
    <a href="/cadastraranimal"> <img class="butn-cad" src="../images/cadastrar.png" width="100px"; alt="Cadastrar animal"> </a>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">

            <div class="col-md-8 col-sm-10 col-lg-7 col-11 bg-light rounded shadow mt-md-5 mt-2 mb-1">
                <div class="col-12 text-muted p-2">
                    <img class="rounded-circle border text" src="images/Latinder logo mobile.png" width="80px">
                    <a class="ml-3 mt-5" style="font-family: 'Roboto', sans-serif; font-size:30px ">Nome</a>
                </div>
                <div class="rounded">
                    <img src="images/foto2.jpg" class="rounded" width="100%">
                </div>
                <div class="mt-3">
                    <a class="tag">fofa</a> <a class="tag">linda</a> <a class="tag">grande</a> <a class="tag">pelo branco</a>
                    <div class="mt-3 pb-2">
                        <a>Descricione de lo perrito</a>
                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection