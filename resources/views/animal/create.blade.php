@extends('../layouts/cruds')

@section('header')
    <h1 class="display-4">CADASTRO DE ANIMAL</h1>
@endsection

@section('content')


    <form  action="{{Route('animal.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label  for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="insira o nome do animal" name="nome">

            <label  for="pelagem">Pelagem:</label>
            <select name="pelagem" class="form-control" id="pelagem">
                <option disabled >selecione uma pelagem</option>
                <option value="2">curto</option>
                <option value="3">médio</option>
                <option value="1">longo</option>
            </select>

            <label  for="vacinacao">É vacinado?</label>
            <select name="vacinacao" class="form-control" id="vacinacao">
                <option value="1">sim</option>
                <option value="2">não</option>
                <option value="3">não sei</option>
            </select>

            <label  for="porte">Qual o porte do animal?</label>
            <select name="porte" class="form-control" id="porte">
                <option value="3">pequeno</option>
                <option value="2">médio</option>
                <option value="1">grande</option>
            </select>

            <label  for="sexo">Qual o sexo do animal?</label>
            <select name="sexo" class="form-control" id="sexo">
                <option value="2">femea</option>
                <option value="1">macho</option>
            </select>

            <label  for="catracao">É castrado?</label>
            <select name="catracao" class="form-control" id="catracao">
                <option value="1">sim</option>
                <option value="2">não</option>
                <option value="3">não sei</option>
            </select>

            <label  for="cor">Cor:</label>
            <select name="cor" class="form-control" id="cor">
                <option value="1">preto</option>
                <option value="2">branco</option>
                <option value="3">dourado</option>
                <option value="4">creme</option>
                <option value="5">amarelo</option>
                <option value="6">chocolate</option>
                <option value="7">mestiço</option>
            </select>

            <label  for="idade">Idade:</label>
            <input type="number" class="form-control" id="idade" placeholder="insira o idade aproximada em anos(se você não souber deixe em branco)" name="idade">

            <label  for="imagem">Imagem:</label>
            <input type="file" class="form-control" id="texto" placeholder="insira uma imagem" name="imagem" accept="image/*" required>

            <label  for="descricao">Descrição:</label>
            <textarea class="form-control" id="descricao" rows="3" name="descricao" required></textarea>


            <label  for="raca">Raça:</label>
            <input type="number" class="form-control" id="raca" placeholder="insira o id da raça" name="id_raca" required>

            <label  for="endereco">Endereco:</label>
            <select name="id_endereco" class="form-control"  onchange="endereco()" id="endereco">
                <option value="1">RUA a</option>
            </select>



            <input type="submit" class="btn btn-primary mt-2">
        </div>
    </form>



@endsection
