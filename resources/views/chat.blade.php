
@extends('/layouts/padrao')
@section('content')
    <div class="container-fluid mt-md-4 mt-sm-0">
        <div class="row d-flex justify-content-center">
            <div class=" col-sm-12 col-md-8 rounded p-2 border" style="background-color: rgba(255,255,255,0.8)">
                    <div class="col-12">
                        <img class="rounded-circle border mr-2" src="{{url($destinatario->imagem)}}" width="80px">
                        <a class="text-left" style="font-size: 25px">Conversando com <b>{{$destinatario->nome}}</b></a>
                    </div>
                <hr>
                <div id="divMensagem">
                @foreach($mensagens as $mensagem)
                    @if($mensagem->id_destinatario == $usuario->id)
                    <div class="col-12" style="min-height: 80px"> <!-- Inicio das mensagens -->
                        <div class=" mt-2 float-left text-left">
                            <div class="text-break "><a class="  p-1 rounded" style="background-color: #ff88f4"><b></b> {{$mensagem->created_at}}</a></div>
                            <div class="text-break "><a class="  p-1 rounded" style="background-color: #ff88f4"><b>{{$mensagem->remetente->nome}}:</b> {{$mensagem->conteudo}}</a></div>

                        </div>
                    </div>
                    @endif
                        @if($mensagem->id_remetente == $usuario->id)
                        <div class="col-12" style="min-height: 80px">
                            <div class=" mt-2 float-right text-right">
                                <div class="text-break "><a class=" p-1 rounded" style="background-color: #63b9ff">{{$mensagem->created_at}}</a></div>
                                <div class="text-break "><a class=" p-1 rounded" style="background-color: #63b9ff">{{$mensagem->conteudo}}</a></div>
                            </div>
                         </div>

                    @endif

            @endforeach
                </div>
                <!-- Mandar a mensagem -->
                <div id="dadosMensagens">

                        @csrf
                        <textarea class="form-control mb-2 mt-2 " style=" resize: none;" id="mensagem" name="mensagem" placeholder="..."></textarea>
                        <input type="hidden" value="{{$destinatario->id}}" name="destinatario" id="destinatario">
                        <input type="hidden" value="{{$remetente->id}}" name="remetente" id="remetente">
                        <input type="hidden" value="{{$publicacao->id}}" name="publicacao" id="publicacao">
                        <input type="hidden" value="@if($ultima_mensagem=="") 0 @else {{$ultima_mensagem->id}} @endif" name="ultima mensagem" id="id_ultima_mensagem">
                    <input type="submit" class="btn btn-outline-primary btn-block mt-2" id="btn">



                </div>
            </div>
        </div>
    </div>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"
    >
    </script>

    <script>
        $(document).ready(function () {
            $("#btn").click(function () {
                var id_remetente = $("#remetente").val();
                var id_destinatario = $("#destinatario").val();
                var conteudo = $("#mensagem").val();
                var publicacao = $("#publicacao").val()
                console.log(conteudo);

            $.ajax({
                type:"POST",
                url:"{{route("falaAjax")}}",
                data:{"id_remetente": id_remetente,"id_destinatario": id_destinatario,"conteudo":conteudo,"publicacao":publicacao, "_token": "{{ csrf_token() }}"},

                success:function (data) {

                    $("#divMensagem").append("<div class=\"col-12\" style=\"min-height: 80px\"><div class=\" mt-2 float-right text-right\"><div class=\"text-break \"><a class=\" p-1 rounded\" style=\"background-color: #63b9ff \">"+((data["created_at"]))+"</a></div><div class=\"text-break \"><a class=\" p-1 rounded\" style=\"background-color: #63b9ff\">"+((data["conteudo"]))+"</a></div></div></div>");
                    $('#mensagem').val("");

                }
            });
            });
        });
    </script>
    <script>
        var msg_nova = setInterval(
            function () {
                var id_remetente = $("#remetente").val();
                var id_destinatario = $("#destinatario").val();
                var publicacao = $("#publicacao").val()
                var id_ultima_mensagem = $("#id_ultima_mensagem").val()
              $.ajax({
                  type:"POST",
                  url:"{{route("novasMensagens")}}",
                  data:{"id_remetente": id_remetente,"id_destinatario": id_destinatario,"publicacao":publicacao,"id_ultima_mensagem":id_ultima_mensagem, "_token": "{{ csrf_token() }}"},
                  success:function (data) {
                           $("#id_ultima_mensagem").val((data["id_ultima_mensagem"]["id"]))
                      @isset($mensagem)
                          if(!((data["mensagensnovas"]))){

                          }else{
                              for (var i=0; i<((data["mensagensnovas"])).length; i++) {

                                  $("#divMensagem").append("<div class=\"col-12\" style=\"min-height: 80px\"><div class=\" mt-2 float-left text-left\"><div class=\"text-break \"><a class=\" p-1 rounded\" style=\"background-color: #ff88f4 \">"+(data["mensagensnovas"][i]["created_at"])+"</a></div><div class=\"text-break \"><a class=\" p-1 rounded\" style=\"background-color: #ff88f4\"><b>@if($mensagem->destinatario->id==$usuario->id){{$mensagem->remetente->nome}}@else{{$mensagem->destinatario->nome}}@endif: </b>"+(data["mensagensnovas"][i]["conteudo"])+"</a></div></div></div>");

                              }
                          }
                          @endisset


                  }
              })
            },10000);

    </script>
@endsection

