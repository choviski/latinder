@extends('../layouts.cruds')

@section('header')
    <h1 class="display-4">EDITAR ANIMAL</h1>
@endsection

@section('content')
    <form  action="{{Route('animal.update',['animal'=> $animal->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label  for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" value="{{$animal->nome}}" name="nome">

            <label  for="pelagem">Pelagem:</label>
            <select name="pelagem" class="form-control" id="pelagem">
                <option value="{{$animal->pelagem}}">"{{$animal->pelagem}}"</option>
                <option value="2">curto</option>
                <option value="3">médio</option>
                <option value="1">longo</option>
            </select>

            <label  for="vacinacao">É vacinado?</label>
            <select name="vacinacao" class="form-control" id="vacinacao">
                <option value="{{$animal->vacinacao}}">"{{$animal->vacinacao}}"</option>
                <option value="1">sim</option>
                <option value="2">não</option>
                <option value="3">não sei</option>
            </select>

            <label  for="porte">Qual o porte do animal?</label>
            <select name="porte" class="form-control" id="porte">
                <option value="{{$animal->porte}}">"{{$animal->porte}}"</option>
                <option value="3">pequeno</option>
                <option value="2">médio</option>
                <option value="1">grande</option>
            </select>

            <label  for="sexo">Qual o sexo do animal?</label>
            <select name="sexo" class="form-control" id="sexo">
                <option value="{{$animal->sexo}}">"{{$animal->sexo}}"</option>
                <option value="2">feminino</option>
                <option value="1">masculino</option>
            </select>

            <label  for="catracao">É castrado?</label>
            <select name="catracao" class="form-control" id="catracao">
                <option value="{{$animal->catracao}}">"{{$animal->catracao}}"</option>
                <option value="1">sim</option>
                <option value="2">não</option>
                <option value="3">não sei</option>
            </select>

            <label  for="cor">Cor:</label>
            <select name="cor" class="form-control" id="cor">
                <option value="{{$animal->cor}}">"{{$animal->cor}}"</option>
                <option value="1">preto</option>
                <option value="2">branco</option>
                <option value="3">dourado</option>
                <option value="4">creme</option>
                <option value="5">amarelo</option>
                <option value="6">chocolate</option>
                <option value="7">mestiço</option>
            </select>

            <label  for="idade">Idade:</label>
            <input type="number" class="form-control" id="idade" name="idade" value="{{$animal->idade}}">

            <label  for="Imagem">Imagem:</label>
            <img
               class="border mt-2" src="../../../{{$animal->imagem}}"width="150px"><br>

            <label  for="descricao">Descrição:</label>
            <textarea class="form-control" id="descricao" rows="3" name="descricao" required>{{$animal->descricao}}</textarea>


            <label  for="raca">Raça:</label>
            <select class="form-control" id="raca" name="id_raca" required>
                <option selected value="{{$animal->id_raca}}" >Manter mesma raça</option>
                @foreach($racas as $racas)
                    <option value="{{$racas->id}}">{{$racas->nome}}</option>
                @endforeach
            </select>


            <label  for="endereco">Endereco:</label>
            <select name="id_endereco" class="form-control" id="endereco">
                    <option selected value="{{$animal->id_endereco}}">Manter mesmo endereço</option>
                @foreach($enderecos as $endereco)
                    <option value="{{$endereco->id}}">{{$endereco->rua}}</option>
                @endforeach
            </select>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


@endsection
