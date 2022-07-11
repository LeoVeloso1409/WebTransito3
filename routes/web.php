<?php

use App\Http\Controllers\AitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\WebTransitoController;
use App\Http\Controllers\Auth\RegisteredUserController;

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

Route::get('/home', function () {
    return view('index');
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('index', [AuthenticatedSessionController::class, 'index'])->name('home');

    Route::get('create-ait', [AitController::class, 'create'])->name('create.ait');

    Route::post('store-ait', [AitController::class, 'store'])->name('store.ait');

    Route::get('edit-ait/{id}',  [AitController::class, 'edit'])->name('edit.ait');

    Route::patch('edit-ait/{id}',  [AitController::class, 'update'])->name('update.ait');

    Route::get('pesquisar-ait', [WebTransitoController::class, 'pesquisarAit'])->name('pesquisar');

    Route::post('ait-busca-cod_ait', [WebTransitoController::class, 'buscaCod_Ait'])->name('buscar.cod.ait');

    Route::post('ait-busca-avancada', [WebTransitoController::class, 'buscaAvancada'])->name('buscar.avancada.ait');

    Route::get('pesquisar-ait/meus-registros', [WebTransitoController::class, 'meusRegistros'])->name('meus_registros');

    Route::get('imprimir-ait/{id}',  [WebTransitoController::class, 'imprimirAit'])->name('imprimir.ait');

    Route::get('imprimir-ait/pdf',  [WebTransitoController::class, 'gerarPDF'])->name('imprimirPDF.ait');

});
