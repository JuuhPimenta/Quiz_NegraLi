<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerNegrali extends Controller
{
    private $perguntas = array();

    public function __construct(){
        $this->perguntas['pergunta1'] = 'C';
        $this->perguntas['pergunta2'] = 'B';
        $this->perguntas['pergunta3'] = 'A';
        $this->perguntas['pergunta4'] = 'B';
        $this->perguntas['pergunta5'] = 'C';
        $this->perguntas['pergunta6'] = 'C';
}

public function index(){
    session(['acertos'=> 0]);
    return view('pagina1');
}

public function dadosPagina1(Request $request){

    $resposta = $request->input('pergunta1');

    session(['resposta1 => $resposta']);

    if(strcmp($this->perguntas['pergunta1'], $resposta) == 0){
        $acertos = session('acertos');
        $acertos++;
        session(['acertos' => $acertos]);
        session(['resultado1' => 'Acertou']);
    }else 
       
    session(['resultado1' => 'Errou']);

         $resposta = $request->input('pergunta2');
     
        session(['resposta2 => $resposta']);

        if(strcmp($this->perguntas['pergunta2'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado2' => 'Acertou']);
        }else 

        session(['resultado2' => 'Errou']);

    return view('pagina2');
}

public function dadosPagina2(Request $request){

    $resposta = $request->input('pergunta3');

    session(['resposta3 => $resposta']);

    if(strcmp($this->perguntas['pergunta3'], $resposta) == 0){
        $acertos = session('acertos');
        $acertos++;
        session(['acertos' => $acertos]);
        session(['resultado3' => 'Acertou']);
    }else 
        session(['resultado3' => 'Errou']);

    $resposta = $request->input('pergunta4');

    session(['resposta4 => $resposta']);

    if(strcmp($this->perguntas['pergunta4'], $resposta) == 0){
        $acertos = session('acertos');
        $acertos++;
        session(['acertos' => $acertos]);
        session(['resultado4' => 'Acertou']);
    }else 
        session(['resultado4' => 'Errou']);

    return view('pagina3');
}

public function dadosPagina3(Request $request){

    $resposta = $request->input('pergunta5');

    session(['resposta5 => $resposta']);

    if(strcmp($this->perguntas['pergunta5'], $resposta) == 0){
        $acertos = session('acertos');
        $acertos++;
        session(['acertos' => $acertos]);
        session(['resultado5' => 'Acertou']);
    }else 
        session(['resultado5' => 'Errou']);

        $resposta = $request->input('pergunta6');

        session(['resposta5 => $resposta']);

        if(strcmp($this->perguntas['pergunta6'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado6' => 'Acertou']);
        }else 
            session(['resultado6' => 'Errou']);



$dados = array();

$dados[1]['gabarito'] = $this->perguntas['pergunta1'];
$dados[1]['resposta'] = session('resposta1');
$dados[1]['resultado'] = session('resultado1');

$dados[2]['gabarito'] = $this->perguntas['pergunta2'];
$dados[2]['resposta'] = session('resposta2');
$dados[2]['resultado'] = session('resultado2');

$dados[3]['gabarito'] = $this->perguntas['pergunta3'];
$dados[3]['resposta'] = session('resposta3');
$dados[3]['resultado'] = session('resultado3');

$dados[4]['gabarito'] = $this->perguntas['pergunta4'];
$dados[4]['resposta'] = session('resposta4');
$dados[4]['resultado'] = session('resultado4');

$dados[5]['gabarito'] = $this->perguntas['pergunta5'];
$dados[5]['resposta'] = session('resposta5');
$dados[5]['resultado'] = session('resultado5');

$dados[6]['gabarito'] = $this->perguntas['pergunta6'];
$dados[6]['resposta'] = session('resposta6');
$dados[6]['resultado'] = session('resultado6');

$acertos = session('acertos');

if($acertos == 6)
    $dados['mensagem'] = "Excelente!! Voce realmente conhece muito sobre o cantor";
else if($acertos == 4 or $acertos == 5)
    $dados['mensagem'] = "Muito bom! Voce demonstrou que gosta desse cantor";
else if($acertos == 2 or $acertos == 3)
    $dados['mensagem'] = " Voce não demonstrou conhecer esse cantor ou banda!";
else
    $dados['mensagem'] = "Esta tentanto me enganar? Voce não conhece esse cantor!";

return view('resultado', compact('dados'));

}
}