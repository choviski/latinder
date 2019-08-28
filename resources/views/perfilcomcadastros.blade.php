@extends("layouts/padrao")
@section("content")
    <style>
        .tag{
            border-style: solid;
            border-width: 2px;
            border-radius: 10px;
            padding: 2px 3px;
            border-color:  #0083ff;
            color: black;
        }
    </style>
    <div class="row">
        <div class="col-4 col-md-2 text-center bg-light border-top border-bottom border-right p-2   ">
            <img src="images/Latinder logo mobile.png" class="rounded-circle border" width="60px">
            <a>Nome do coleguinha</a>
        </div>
        <div class="col-4 col-md-5 text-center bg-light border-top border-bottom border-right border p-2"><a href="/perfil"><h5 class="mt-4 mt-md-3 text-muted"><u>CADASTROS</u></h5></a></div>
        <div class="col-4 col-md-5 text-center bg-light border-top border-bottom border p-2"><a href="/perfilInt"><h5 class="mt-4 mt-md-3 text-muted ">INTERESSES</h5></a></div>
    </div>
<!-- ============ AQUI VÃO AS POSTAGENS ============ -->
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">

            <div class="col-md-8 col-sm-10 col-lg-7 col-11 bg-light rounded shadow mt-md-5 mt-2 mb-1">

                <div class="rounded pt-3">
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
