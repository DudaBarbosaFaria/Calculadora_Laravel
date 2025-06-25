<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{


    public function somar(Request $request)
    {
        $quantidade = $request->input('quantidade');
        return view('formSomar', ['quantidade' => $quantidade]);
    }

    public function calcularSoma(Request $request)
    {
        $valores = $request->input('valor');
        $resultado = array_sum($valores);
        return view('resultado', ['resultado' => $resultado]);
    }



    public function subtrair(Request $request)
    {
        $quantidade = $request->input('quantidade');
        return view('formSubtracao', ['quantidade' => $quantidade]);
    }

    public function calcularSubtracao(Request $request)
    {
        $valores = $request->input('valor');
        $resultado = $valores[0];
        for ($i = 1; $i < count($valores); $i++) {
            $resultado -= $valores[$i];
        }
        return view('resultado', ['resultado' => $resultado]);
    }



    public function multiplicar(Request $request)
    {
        $quantidade = $request->input('quantidade');
        return view('formMultiplicacao', ['quantidade' => $quantidade]);
    }

    public function calcularMultiplicacao(Request $request)
    {
        $valores = $request->input('valor');
        $resultado = 1;
        foreach ($valores as $valor) {
            $resultado *= $valor;
        }
        return view('resultado', ['resultado' => $resultado]);
    }



    public function dividir(Request $request)
    {
        $quantidade = $request->input('quantidade');
        return view('formDivisao', ['quantidade' => $quantidade]);
    }

    public function calcularDivisao(Request $request)
    {
        $valores = $request->input('valor');
        $resultado = $valores[0];
        for ($i = 1; $i < count($valores); $i++) {
            if ($valores[$i] == 0) {
                return view('resultado', ['resultado' => 'Erro: divisão por zero']);
            }
            $resultado /= $valores[$i];
        }
        return view('resultado', ['resultado' => $resultado]);
    }
}
