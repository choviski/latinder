@extends('/layouts/padrao')

@section('content')
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">

            <div class="col-md-8 col-sm-10 col-lg-7 col-11 pt-2 bg-light rounded shadow mt-md-5 mt-2 mb-1 text-center">
                <h4 style="font-family: 'Roboto', sans-serif;">Insira os dados do animal</h4>
                <form action="#" method="#" class="form-group">
                <input type="text" class="form-control mb-2" name="nome" placeholder="Nome:">
                <select name="pelagem" class="form-control mb-2" required>
                        <option value="" disabled selected>Pelagem:</option>
                        <option value="curto">Curto</option>
                        <option value="medio">Médio</option>
                        <option value="longo">Longo</option>
                    </select>
                <select name="vacinacao" class="form-control mb-2" required>
                        <option value="" disabled selected>Vacinado:</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                        <option value="nao_sei">Não sei</option>
                    </select>
                <select name="porte" class="form-control mb-2" required>
                        <option value="" disabled selected>Porte:</option>
                        <option value="pequeno">Pequeno</option>
                        <option value="medio">Médio</option>
                        <option value="grande">Grande</option>
                    </select>
                <select name="sexo" class="form-control mb-2" required>
                        <option value="" disabled selected>Sexo:</option>
                        <option value="macho">Macho</option>
                        <option value="femea">Fêmea</option>
                </select>
                <select name="castracao" class="form-control mb-2" required>
                        <option value="" disabled selected>Castração:</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                        <option value="nao_sei">Não sei</option>
                </select>
                <input type="number" class="form-control mb-2" name="idade" placeholder="Idade">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Enviar</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputFoto"
                                   aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputFoto">Escolha a foto do animalzinho</label>
                    </div>
                 </div>
                <input type="text" class="form-control mb-2" name="descricao" placeholder="Descrição" required>
                <select name="cor" class="form-control mb-2" required>
                        <option value="" disabled selected>Cor:</option>
                        <option value="amarelo">Amarelo</option>
                        <option value="chocolate">Chocolate</option>
                        <option value="branco">Branco</option>
                        <option value="preto">Preto</option>
                        <option value="cinzento">Cinzento</option>
                        <option value="dourado">Dourado</option>
                        <option value="creme">Creme</option>
                        <option value="vermelho">Vermelho</option>
                        <option value="mestiço">Mestiço</option>
                    </select>


                <input type="submit" value="Cadastrar" class="btn-block btn-primary rounded">
                <input type="reset" value="Limpar" class="btn-block btn-danger rounded">
                </form>
            </div>
        </div>
    </div>
@endsection
