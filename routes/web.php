<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanilhaController;

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

//Get
Route::get('/create', [PlanilhaController::class, 'create'])->name('create')->middleware('auth');
Route::get('/', [PlanilhaController::class, 'index'])->name('home')->middleware('auth');
Route::get('/planilha/{id}', [PlanilhaController::class, 'show'])->name('show')->middleware('auth');
Route::get('/editar/{id}', [PlanilhaController::class, 'edit'])->name('editar')->middleware('auth');

//Post
Route::post('/create', [PlanilhaController::class, 'store'])->name('store')->middleware('auth')->can('adm');

//Put
Route::put('/editar/{id}', [PlanilhaController::class, 'update'])->name('update')->middleware('auth')->can('adm');

//Delete
Route::delete('/cancelar/{id}', [PlanilhaController::class, 'cancelar'])->name('cancelar')->middleware('auth')->can('adm');
Route::delete('/planilha/deletar/{id}', [PlanilhaController::class, 'destroy'])->name('delete')->middleware('auth')->can('adm');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
