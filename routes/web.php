<?php

use App\Http\Controllers\CalculadoraController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/somar', [CalculadoraController::class, 'somar']);
Route::post('/calcularSoma', [CalculadoraController::class,'calcularSoma']);

Route::get('/subtrair', [CalculadoraController::class, 'subtrair']);
Route::post('/resultadoSubtracao', [CalculadoraController::class, 'calcularSubtracao']);

Route::get('/multiplicar', [CalculadoraController::class, 'multiplicar']);
Route::post('/resultadoMultiplicacao', [CalculadoraController::class, 'calcularMultiplicacao']);

Route::get('/dividir', [CalculadoraController::class, 'dividir']);
Route::post('/resultadoDivisao', [CalculadoraController::class, 'calcularDivisao']);