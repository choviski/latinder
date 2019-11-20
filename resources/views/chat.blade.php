
@extends('/layouts/padrao')
@section('content')
    <div class="container-fluid mt-md-4 mt-sm-0">
        <div class="row d-flex justify-content-center">
            <div class=" col-sm-4 col-md-8 rounded p-2 border" style="background-color: rgba(255,255,255,0.8)">
                    <div class="col-12">
                        <img class="rounded-circle border mr-2" src="../../../../imgs_perfil/foto_perfil1.png" width="80px">
                        <a class="text-left" style="font-size: 25px"><b>Nome do individuo</b> a respeito do Animal</a>
                    </div>
                <hr>
                <div class="col-12" style="min-height: 50px"> <!-- Inicio das mensagens -->
                    <div class=" mt-2 float-left text-left">
                        <div class="text-break "><a class="  p-1 rounded" style="background-color: #ff88f4"><b>Nome do usuario:</b> Mensagem texto texto</a></div>
                    </div>
                </div>
                <div class="col-12" style="min-height: 50px">
                    <div class=" mt-2 float-right text-right">
                        <div class="text-break "><a class="bg-primary  p-1 rounded">Mensagem texto texto</a></div>
                    </div>
                </div>
                <div class="col-12" style="min-height: 50px"> <!-- Inicio das mensagens -->
                    <div class=" mt-2 float-left text-left">
                        <div class="text-break "><a class="  p-1 rounded" style="background-color: #ff88f4"><b>Nome do usuario:</b> Mensagem texto texto</a></div>
                    </div>
                </div>
                <!-- Mandar a mensagem -->
                <div>
                    <form action="#" class="form-group">
                        <textarea class="form-control " style=" resize: none;">Enviar mensagem...</textarea>
                        <input type="submit" class="btn btn-outline-primary btn-block mt-2">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

