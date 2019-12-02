@extends(".layouts.iniciais")

@section('content')
    <div class=" p-2 bg-light rounded shadow text-center">
        <form action="{{route("recuperar")}}" method="post" class="form-group ">
            @csrf
            <input type="text" name="login" class="form-control mt-2" placeholder="Login" required>


            <input type="submit" value="enviar" class="btn-block btn-primary rounded mt-2">

        </form>
        <a href="/">Voltar</a>

    </div>

    @endsection