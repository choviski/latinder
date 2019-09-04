@extends('../layouts.cruds')

@section('header')
    <h1 class="display-4">{{$animal->nome}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightskyblue">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">RAÇA</th>
            <th scope="col">PELAGEM</th>
            <th scope="col">É VACINADO ?</th>
            <th scope="col">É CASTRADO ?</th>
            <th scope="col">PORTE</th>
            <th scope="col">SEXO</th>
            <th scope="col">COR</th>
            <th scope="col">IDADE</th>
            <th scope="col">FOTO</th>
            <th scope="col">PORTE</th>
            <th scope="col">ENDERECO</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$animal->id}}</td>
            <td>{{$animal->nome}}</td>
            <td>{{$animal->id_racas}}</td>
            <td>{{$animal->pelagem}}</td>
            <td>{{$animal->vacinacao}}</td>
            <td>{{$animal->catracao}}</td>
            <td>{{$animal->porte}}</td>
            <td>{{$animal->sexo}}</td>
            <td>{{$animal->cor}}</td>
            <td>{{$animal->idade}}</td>
            <td>{{$animal->imagem}}</td>
            <td>{{$animal->porte}}</td>
            <td>{{$animal->id_endereco}}</td>
            <td>{{$animal->created_at}}</td>
            <td>{{$animal->updated_at}}</td>
            <td>{{$animal->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/animal"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection




