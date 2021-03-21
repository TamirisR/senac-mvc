<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/avisos', function () {
    return view('avisos', ['nome'=>'Tami', 'motrar' =>true, 'avisos'=> [[ 'id'=>1, 'texto' => 'Feriados agora'], [ 'id' =>2, 'texto' => 'Feriados semana que vem']]]);
});
Route::get('/principal', function (){
    return view ('principal', ['msg' =>'Oiii', 'aviso'=>true, 'mostrar1' => 'Olha o Cachorro', 'mostrar2'=>'Olha o Gatinho']);
});
