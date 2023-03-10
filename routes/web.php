<?php

use App\Http\Controllers\TareasController;
use App\Models\Tareas;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/lista', [TareasController::class, 'listado_de_tareas'])->name('listarTareas');
Route::post('/lista', [TareasController::class, 'nuevaTarea'])->name('añadirTareas');
Route::delete('/lista/{id}', [TareasController::class, 'completarTarea'])->name('tareaCompletada');