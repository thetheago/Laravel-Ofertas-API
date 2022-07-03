<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CpfControllerApi;
use App\Http\Controllers\Api\CpfOfertaControllerApi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Versão 1
$versaoApi = 'v1';

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(CpfControllerApi::class)->name('api.')->prefix($versaoApi)->group(function(){
    Route::post('/cpf', 'verificaCpf')->name('cpf');
});

Route::controller(CpfOfertaControllerApi::class)->name('api.')->prefix($versaoApi)->group(function(){
    Route::post('/ofertas', 'pegarOfertasDoCpf')->name('pegar.ofertas');
});
