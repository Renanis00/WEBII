<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dever1Controller extends Controller
{
    public function ex1()
    {
        return view('dever1.ex1');
    }
    public function resultado1(Request $request){
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
    public function resultado2(Request $request){
        $total = $request->total;
        $brancos = $request->brancos;
        $nulos = $request->nulos;
        $validos = $request->validos;

        $percentualBrancos = $brancos / $total * 100;
        $percentualNulos = $nulos / $total * 100;
        $percentualValidos = $validos / $total * 100;

        return view('dever1.resultado2', compact('percentualBrancos', 'percentualNulos', "percentualValidos", "total"));





    }
}
