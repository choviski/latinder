@extends('../layouts/padrao')





@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous">
    </script>
    <div class="container-fluid">
        <div class="row justify-content-around">

            <div class="bg-white rounded mb-5 col-md-11 col-sm-12 shadow-md mt-2" >
                <div class="table-responsive" >
                    <canvas class="line-chart" style="height:400px" id="line-chart-user"></canvas>
                </div>
            </div>

            <div class="bg-white rounded mb-5 col-md-7 col-sm-12 shadow-md" >
                <div class="table-responsive" >
                    <canvas class="line-chart2" style="height:400px" id="line-chart-animal"></canvas>
                </div>
            </div>

            <div class="bg-white rounded mb-5 col-md-3 col-sm-12 pb-1 shadow-md" >
                <div class="table-responsive" >
                    <canvas class="doughnut-chart" style="height:400px" id="doughnut-chart-vacinacao"></canvas>
                </div>
            </div>
            <div class="bg-white rounded mb-5 col-md-3 col-sm-12 pb-1 shadow-md" >
                <div class="table-responsive" >
                    <canvas class="doughnut-chart2" style="height:400px" id="doughnut-chart-castracao"></canvas>
                </div>
            </div>
            <div class="bg-white rounded mb-5 col-md-3 col-sm-12 pb-1 shadow-md" >
                <div class="table-responsive" >
                    <canvas class="doughnut-chart3" style="height:400px" id="doughnut-chart-castracao"></canvas>
                </div>
            </div>
            <div class="bg-white rounded mb-5 col-md-3 col-sm-12 pb-1 ml-md-1 shadow-md" >
                <div class="table-responsive" >
                    <canvas class="doughnut-chart4" style="height:400px" id="doughnut-chart-castracao"></canvas>
                </div>
            </div>
            <div class="bg-white rounded mb-5 col-md-3 col-sm-12 pb-1 shadow-md" >
                <div class="table-responsive" >
                    <canvas class="doughnut-chart5" style="height:400px" id="doughnut-chart-castracao"></canvas>
                </div>
            </div>
            <div class="bg-white rounded mb-5 col-md-3 col-sm-12 pb-1 shadow-md" >
                <div class="table-responsive" >
                    <canvas class="doughnut-chart6" style="height:400px" id="doughnut-chart-castracao"></canvas>
                </div>
            </div>
            <div class="bg-white rounded mb-5 col-md-3 col-sm-12 pb-1 shadow-md" >
                <div class="table-responsive" >
                    <canvas class="doughnut-chart7" style="height:400px" id="doughnut-chart-castracao"></canvas>
                </div>
            </div>
            <div class="bg-white rounded mb-5 col-md-11 col-sm-12 shadow-md" >
                <div class="table-responsive" >
                    <canvas class="line-chart3" style="height:400px" id="line-chart-user"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script> // SCRIPT PARA O GRAFICO DO USUARIO //

        var Label=[];
                @foreach($dados['meses_usuarios'] as $numero =>$valor)

        var add = Label.push("{{($valor)}}");
                @endforeach

        var Usuarios=[];
                @foreach($dados['usuarios'] as $numero =>$valor)
        var add = Usuarios.push({{$valor}});
                @endforeach


        var ctx = document.getElementsByClassName("line-chart");
        var chartGraph = new Chart(ctx,{
            type:'bar',
            data: {
                labels:Label,
                datasets:[{
                    label:"USUÁRIOS DO LATINDER",
                    borderWidth:6,
                    borderColor: 'rgba(255,0,169,0.5)',
                    backgroundColor:  'rgba(5,147,255,0.5)',
                    data:Usuarios,
                },
                ]
            },
            options:{
                responsive: true,
                maintainAspectRatio: false,
                title:{
                    display:true,
                    fontSize:20,
                    text:"USUÁRIOS CADASTRADOS: {{$dados['total_usuarios']}} "
                },
                labels:{
                    fontStyle:"bold",
                },
                scales:{
                    yAxes:[{
                        ticks:{
                            min:0,
                            beginAtZero:true,
                        },
                    }],
                }
            }
        });

    </script>

    <script> // SCRIPT PARA O GRAFICO DO ANIMAL //

        var Label=[];
                @foreach($dados['meses_animal'] as $numero =>$valor)

        var add = Label.push("{{($valor)}}");
                @endforeach

        var Animais=[];
                @foreach($dados['animais'] as $numero =>$valor)
        var add = Animais.push({{$valor}});
                @endforeach


        var ctx = document.getElementsByClassName("line-chart2");
        var chartGraph = new Chart(ctx,{
            type:'line',
            data: {
                labels:Label,
                datasets:[{
                    label:"ANIMAIS CADASTRADOS NO LATINDER",
                    borderWidth:6,
                    borderColor: 'rgba(255,0,169,0.5)',
                    backgroundColor:  'rgba(5,147,255,0.5)',
                    data:Animais,
                },
                ]
            },
            options:{
                responsive: true,
                maintainAspectRatio: false,
                title:{
                    display:true,
                    fontSize:20,
                    text:"ANIMAIS CADASTRADOS: {{$dados['total_animais']}} "
                },
                labels:{
                    fontStyle:"bold",
                },
                scales:{
                    yAxes:[{
                        ticks:{
                            min:0,
                            beginAtZero:true,
                        },
                    }],
                }
            }
        });

    </script>

    <script>
        var ctx = document.getElementsByClassName("doughnut-chart");
        var chartGraph = new Chart(ctx,{
            type: 'doughnut',
            data: {
                labels: ['Vacinados','Não vacinados','Sem infromaçoes'],
                datasets: [
                    {
                        label:'Animais Vacinados',
                        backgroundColor: ['#0ea000','#e61100','#6b6f75'],
                        data: [{{$dados['animais_vacinados']}}, {{$dados['animais_nao_vacinados']}}, {{$dados['animais_nao_sei']}}]
                    }
                ]
            },
            options: {
                animation:{
                    animateScale:true
                },
                responsive: true,
                maintainAspectRatio: false,
                title:{
                    display:true,
                    fontSize:20,
                    text:"ANIMAIS VACINADOS"
                }
            }
        });
    </script>

    <script>
        var ctx = document.getElementsByClassName("doughnut-chart2");
        var chartGraph = new Chart(ctx,{
            type: 'doughnut',
            data: {
                labels: ['Castrados','Não castrados','Sem infromaçoes'],
                datasets: [
                    {
                        label:'Animais Vacinados',
                        backgroundColor: ['#0ea000','#e61100','#6b6f75'],
                        data: [{{$dados['animais_castrados']}}, {{$dados['animais_nao_castrados']}}, {{$dados['animais_nao_sei_castrados']}}]
                    }
                ]
            },
            options: {
                animation:{
                    animateScale:true
                },
                responsive: true,
                maintainAspectRatio: false,
                title:{
                    display:true,
                    fontSize:20,
                    text:"ANIMAIS CASTRADOS"
                }
            }
        });
    </script>

    <script>
        var ctx = document.getElementsByClassName("doughnut-chart3");
        var chartGraph = new Chart(ctx,{
            type: 'doughnut',
            data: {
                labels: ['Machos','Fêmeas'],
                datasets: [
                    {
                        label:'Animais Vacinados',
                        backgroundColor: ['#0007a0','#e600aa'],
                        data: [{{$dados['animais_machos']}}, {{$dados['animais_femeas']}}]
                    }
                ]
            },
            options: {
                animation:{
                    animateScale:true
                },
                responsive: true,
                maintainAspectRatio: false,
                title:{
                    display:true,
                    fontSize:20,
                    text:"SEXO DOS ANIMAIS"
                }
            }
        });
    </script>

    <script>
        var ctx = document.getElementsByClassName("doughnut-chart4");
        var chartGraph = new Chart(ctx,{
            type: 'doughnut',
            data: {
                labels: ['Preto','Branco','Dourado','Creme','Amarelo','Chocolate','Mestiço'],
                datasets: [
                    {
                        label:'Cores dos animais',
                        backgroundColor: ['#111111','#e2e6e1','#f8ff00','#e6dea8',
                            '#e5e665','#2a1815','#49341b'],
                        data: [{{$dados['animais_pretos']}}, {{$dados['animais_brancos']}}, {{$dados['animais_dourados']}}, {{$dados['animais_creme']}},
                            {{$dados['animais_amarelo']}}, {{$dados['animais_chocolate']}}, {{$dados['animais_mestico']}}],
                    }
                ]
            },
            options: {
                animation:{
                    animateScale:true
                },
                responsive: true,
                maintainAspectRatio: false,
                title:{
                    display:true,
                    fontSize:20,
                    text:"COR DOS ANIMAIS"
                }
            }
        });
    </script>

    <script>
        var ctx = document.getElementsByClassName("doughnut-chart5");
        var chartGraph = new Chart(ctx,{
            type: 'doughnut',
            data: {
                labels: ['Curta','Média','Longa'],
                datasets: [
                    {
                        label:'Pelagem dos animais',
                        backgroundColor: ['#ff000a','#000ee6','#eeff00'],
                        data: [{{$dados['animais_pelo_curto']}}, {{$dados['animais_pelo_medio']}}, {{$dados['animais_pelo_longo']}},]

                    }
                ]
            },
            options: {
                animation:{
                    animateScale:true
                },
                responsive: true,
                maintainAspectRatio: false,
                title:{
                    display:true,
                    fontSize:20,
                    text:"PELAGEM DOS ANIMAIS"
                }
            }
        });
    </script>

    <script>
        var ctx = document.getElementsByClassName("doughnut-chart6");
        var chartGraph = new Chart(ctx,{
            type: 'doughnut',
            data: {
                labels: ['Pequeno','Médio','Grande'],
                datasets: [
                    {
                        label:'Porte dos animais',
                        backgroundColor: ['#00ffc6','#77e602','#1bff00'],
                        data: [{{$dados['animais_pequenos']}}, {{$dados['animais_medios']}}, {{$dados['animais_grandes']}},]

                    }
                ]
            },
            options: {
                animation:{
                    animateScale:true
                },
                responsive: true,
                maintainAspectRatio: false,
                title:{
                    display:true,
                    fontSize:20,
                    text:"PORTE DOS ANIMAIS"
                }
            }
        });
    </script>

    <script>
        var ctx = document.getElementsByClassName("doughnut-chart7");
        var chartGraph = new Chart(ctx,{
            type: 'doughnut',
            data: {
                labels: ['Cachorro','Gato'],
                datasets: [
                    {
                        label:'Espécie dos animais',
                        backgroundColor: ['#8f00ff','#31a0e6'],
                        data: [{{$dados['animais_cachorro']}}, {{$dados['animais_gato']}},]

                    }
                ]
            },
            options: {
                animation:{
                    animateScale:true
                },
                responsive: true,
                maintainAspectRatio: false,
                title:{
                    display:true,
                    fontSize:20,
                    text:"ESPÉCIE DOS ANIMAIS"
                }
            }
        });
    </script>

    <script> // SCRIPT PARA O GRAFICO DA PUBLICACAO //

        var Label=[];
                @foreach($dados['meses_publicacao'] as $numero =>$valor)

        var add = Label.push("{{($valor)}}");
                @endforeach

        var Publicacao=[];
                @foreach($dados['publicacao'] as $numero =>$valor)
        var add = Publicacao.push({{$valor}});
                @endforeach


        var ctx = document.getElementsByClassName("line-chart3");
        var chartGraph = new Chart(ctx,{
            type:'line',
            data: {
                labels:Label,
                datasets:[{
                    label:"PUBLICAÇÕES NO LATINDER",
                    borderWidth:6,
                    borderColor: 'rgba(255,0,169,0.5)',
                    backgroundColor:  'rgba(5,147,255,0.5)',
                    data:Publicacao,
                },
                ]
            },
            options:{
                responsive: true,
                maintainAspectRatio: false,
                title:{
                    display:true,
                    fontSize:20,
                    text:"PUBLICAÇÕES FEITAS: {{$dados['total_publicacao']}} "
                },
                labels:{
                    fontStyle:"bold",
                },
                scales:{
                    yAxes:[{
                        ticks:{
                            min:0,
                            beginAtZero:true,
                        },
                    }],
                }
            }
        });

    </script>
    </body>
    </html>
@endsection
