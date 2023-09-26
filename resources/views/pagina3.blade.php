@extends('layout')
@section('content')

<div class="card border">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-center">
                <p class="texto">
                    <h4><strong>Página 3: </strong> </h4>
                </p>
            </div>
        </div>
        <form action=" {{route('dadosPagina3')}}" method="POST">
            @csrf

            <div class="form-group py-4">
                <label for="pergunta5"> <h3> <strong> Recentemente Negra Li participou de um grande projeto do bombap nacional, qual? </strong> </h3></label>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta5" id="pergunta5" value="A">
                    <label class="form-check-label" for="pergunta5">
                        <h5> Rua Babilonia </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                <input class="form-check-input" type="radio" name="pergunta5" id="pergunta5" value="B">
                <label class="form-check-label" for="pergunta5">
                    <h5> Poetisas no Topo </h5>
                </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta5" id="pergunta5" value="C">
                    <label class="form-check-label" for="pergunta5">
                       <h5> Favela Vive </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta5" id="pergunta5" value="D">
                    <label class="form-check-label" for="pergunta5">
                      <h5>  Poesia Acústica </h5>
                    </label>
                </div>
            </div>
            <div class="form-group py-4">
                <label for="pergunta6"> <h3> <strong> Seu último album lançado foi: </strong> </h3></label>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta6" id="pergunta6" value="A">
                    <label class="form-check-label" for="pergunta6">
                        <h5> Negra Livre </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                <input class="form-check-input" type="radio" name="pergunta6" id="pergunta6" value="B">
                <label class="form-check-label" for="pergunta6">
                    <h5> Antonia </h5>
                </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta6" id="pergunta6" value="C">
                    <label class="form-check-label" for="pergunta6">
                       <h5> Raízes </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta6" id="pergunta6" value="D">
                    <label class="form-check-label" for="pergunta6">
                      <h5>  Tudo de Novo </h5>
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