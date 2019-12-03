@extends(".layouts.iniciais")

@section('content')
    <div class=" p-2 bg-light rounded shadow text-center">
        <h1>Responda a seguinte pergunta</h1>

            <input type="text" name="pergunta" class="form-control mt-2" value="{{$usuario->perguntaSecreta}}" disabled>
            <input type="text" name="resposta" class="form-control mt-2" value="">
            <input type="submit" value="recuperar senha" class="btn-block btn-primary rounded mt-2">

        </form>
        <a href="/">Voltar</a>

    </div>

@endsection