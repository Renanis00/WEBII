<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dever1Controller extends Controller
{
    public function ex1()
    {
        return view('dever1.ex1');
    }

    public function resultado1(Request $request)
    {
        $nota1 = $request->nota1;
        $nota2 = $request->nota2;
        $nota3 = $request->nota3;
        $nota4 = $request->nota4;

        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        $aluno = "Agaraga";

        return view('dever1.resultado1', compact('media', 'aluno'));
    }

    public function ex2()
    {
        return view('dever1.ex2');
    }

    public function resultado2(Request $request)
    {
        $total = $request->total;
        $brancos = $request->brancos;
        $nulos = $request->nulos;
        $validos = $request->validos;

        $percentualBrancos = $brancos / $total * 100;
        $percentualNulos = $nulos / $total * 100;
        $percentualValidos = $validos / $total * 100;

        if ($brancos + $nulos + $validos > $total) {
            echo "<h1>Total de eleitores inconsistente</h1>";
        } else {
            return view('dever1.resultado2', compact('percentualBrancos', 'percentualNulos', "percentualValidos", "total"));
        }
    }

    public function ex3()
    {
        return view('dever1.ex3');
    }

    public function resultado3(Request $request)
    {
        $salario = $request->salario;
        $reajuste = $request->reajuste;

        $reajusteTotal = $reajuste * $salario / 100;
        $salarioReajustado = $salario + $reajusteTotal;

        return view('dever1.resultado3', compact('reajusteTotal', 'salarioReajustado', 'salario', 'reajuste'));
    }

    public function ex4()
    {
        return view('dever1.ex4');
    }

    public function resultado4(Request $request)
    {
        $fabrica = $request->fabrica;
        $distribuidor = $request->distribuidor;
        $impostos = $request->impostos;

        $totalDistribuidor = 28 * $fabrica / 100;
        $totalImpostos = 45 * $fabrica / 100;
        $totalVeiculo = $totalDistribuidor + $totalImpostos + $fabrica;

        return view('dever1.resultado4', compact('totalImpostos', 'totalDistribuidor', 'totalVeiculo', 'fabrica', 'distribuidor', 'impostos'));
    }

    public function ex5()
    {
        return view('dever1.ex5');
    }

    public function resultado5(Request $request)
    {
        $fabrica = $request->fabrica;
        $distribuidor = $request->distribuidor;
        $impostos = $request->impostos;

        $totalDistribuidor = $distribuidor * $fabrica / 100;
        $totalImpostos = $impostos * $fabrica / 100;
        $totalVeiculo = $totalDistribuidor + $totalImpostos + $fabrica;

        return view('dever1.resultado4', compact('totalImpostos', 'totalDistribuidor', 'totalVeiculo', 'fabrica', 'distribuidor', 'impostos'));
    }

    public function ex6()
    {
        return view('dever1.ex6');
    }

    public function resultado6(Request $request)
    {
        $salario = $request->salario;
        $carros = $request->carros;
        $total = $request->total;
        $comissao = $request->comissao;

        $valorComissao = 5 * $total / 100;
        $comissaoVendas = ($comissao * $total / $carros) / 100;
        $totalSalario = $salario + $valorComissao + $comissaoVendas;

        return view('dever1.resultado6', compact('totalSalario', 'comissaoVendas', 'valorComissao'));
    }

    public function ex7()
    {
        return view('dever1.ex7');
    }

    public function resultado7(Request $request)
    {
        $nota1 = $request->p1;
        $nota2 = $request->p2;

        $mediaFinal = ($nota1 * 0.4) + ($nota2 * 0.6);

        return view('dever1.resultado7', compact('mediaFinal'));
    }

    public function ex8()
    {
        return view('dever1.ex8');
    }

    public function resultado8(Request $request)
    {
        $raio = $request->raio;
        $altura = $request->altura;

        $volume = 3.14 * ($raio * $raio) * $altura;

        return view('dever1.resultado8', compact('volume'));
    }

    public function ex9()
    {
        return view('dever1.ex9');
    }

    public function resultado9(Request $request)
    {
        $numero1 = $request->n1;
        $numero2 = $request->n2;

        $doidera = ($numero1 + $numero2);
        $resultadoDoidera = $doidera * $numero1;

        return view('dever1.resultado9', compact('doidera', 'resultadoDoidera'));
    }

    public function ex10()
    {
        return view('dever1.ex10');
    }

    public function resultado10(Request $request)
    {
        $min = $request->min;
        $max = $request->max;

        $estoqueMedio = ($min + $max) / 2;

        return view('dever1.resultado10', compact('estoqueMedio'));
    }

    public function ex11()
    {
        return view('dever1.ex11');
    }

    public function resultado11(Request $request)
    {
        $horas = $request->horas;
        $valor = $request->valor;
        $dependentes = $request->dependentes;
        $nome = $request->nome;

        $horasTotal = $valor * $horas;
        $dependentesPorc = ($dependentes * 0.03) * $horasTotal;
        $salarioTotal = $horasTotal + $dependentesPorc;

        return view('dever1.resultado11', compact('horasTotal', 'dependentes', 'horas', 'salarioTotal', 'nome'));
    }

    public function ex12()
    {
        return view('dever1.ex12');
    }

    public function resultado12(Request $request)
    {
        $ano = $request->idade;
        $mes = $request->mes;
        $dia = $request->dia;

        $anoDia = $ano * 365;
        $mesDia = $mes * 30;
        $totalDia = $anoDia + $mesDia + $dia;

        return view('dever1.resultado12', compact('ano', 'mes', 'dia', 'totalDia'));
    }

    public function ex13()
    {
        return view('dever1.ex13');
    }

    public function resultado13(Request $request)
    {
        $idade = $request->idade;

        $anoDia = intdiv($idade, 365);
        $mesDia = ($idade % 365) /  30;
        $diaDia2 = ($idade % 365) % 30;


        return view('dever1.resultado13', compact('anoDia', 'mesDia', 'diaDia2'));
    }

    public function ex14()
    {
        return view('dever1.ex14');
    }

    public function resultado14(Request $request)
    {
        $nota1 = $request->p1;
        $nota2 = $request->p2;
        $nota3 = $request->p3;

        $mediaFinal = ($nota1 * 0.2) + ($nota2 * 0.3) + ($nota3 * 0.5);

        return view('dever1.resultado14', compact('mediaFinal'));
    }

    public function ex15()
    {
        return view('dever1.ex15');
    }

    public function resultado15(Request $request){

        $tempo = $request->tempo;

        $horaTempo = intdiv($tempo, 3600);
        $minutoTempo = ($tempo % 3600) / 60;
        $segundosTempo = ($tempo % 3600) % 60;


        return view('dever1.resultado15', compact('minutoTempo', 'horaTempo', 'segundosTempo'));
    }
    public function ex16()
    {
        return view('dever1.ex16');
    }
    public function resultado16(Request $request){


        $nome = $request->nome;
        $salario = $request->salario;
        $vendas = $request->vendas;
        $percentual = $request->percentual;


        $percentualVendas = ($vendas * $percentual) / 100;
        $salarioTotal = $salario + $percentualVendas;


        return view('dever1.resultado16', compact('salario', 'vendas', 'percentual', 'nome', 'salarioTotal'));
    }
    public function ex17(){
       return view('dever1.ex17');
    }

    public function resultado17(Request $request){


        $nome = $request->nome;
        $distancia = $request->distancia;
        $horas = $request->tempo;


        $velocidadeMedia = ($distancia / $horas);


        return view('dever1.resultado17', compact('nome', 'distancia', 'horas', 'velocidadeMedia'));
    }

}


