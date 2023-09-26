@extends('layout')
@section('content')

<div class="card border">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-center">
                <p class="texto">
                    <h4><strong>Página 2: </strong> </h4>
                </p>
            </div>
        </div>
        <form action=" {{route('dadosPagina2')}}" method="POST">
            @csrf

            <div class="form-group py-4">
                <label for="pergunta3"> <h3> <strong> Qual artista internacinal que contou com a participação da cantora em seu clipe.  </strong> </h3></label>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta3" id="pergunta3" value="A">
                    <label class="form-check-label" for="pergunta3">
                        <h5> Akon </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                <input class="form-check-input" type="radio" name="pergunta3" id="pergunta3" value="B">
                <label class="form-check-label" for="pergunta3">
                    <h5> Snopp Dog </h5>
                </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta3" id="pergunta3" value="C">
                    <label class="form-check-label" for="pergunta3">
                       <h5> Drake </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta3" id="pergunta3" value="D">
                    <label class="form-check-label" for="pergunta3">
                      <h5>  Doctor Dre </h5>
                    </label>
                </div>
            </div>
            <div class="form-group py-4">
                <label for="pergunta4"> <h3> <strong> Negra li marcou presença em uma grande composição do rap nacional, qual foi? </strong> </h3></label>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta4" id="pergunta4" value="A">
                    <label class="form-check-label" for="pergunta4">
                        <h5> Jesus Chorou </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                <input class="form-check-input" type="radio" name="pergunta4" id="pergunta4" value="B">
                <label class="form-check-label" for="pergunta4">
                    <h5> Respeito é pra quem tem </h5>
                </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta4" id="pergunta4" value="C">
                    <label class="form-check-label" for="pergunta4">
                       <h5> Ponta de Lança </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta4" id="pergunta4" value="D">
                    <label class="form-check-label" for="pergunta4">
                      <h5> Um Bom Lugar </h5>
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Próxima</button>
            <button onclick="window.location.href='/';" type="button" 
                    class="btn btn-danger btn-sm">Desistir</button>
        </form>
    </div> 
</div> 

@endsection