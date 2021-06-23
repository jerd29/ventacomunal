<?php

use App\Http\Controllers\CambioController;
use App\Http\Controllers\ComboController;
use App\Http\Controllers\ConsejoComunalController;
use App\Http\Controllers\JornadaController;
use App\Http\Controllers\VentaController;
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
    return view('index');
});

// Route::resource('datatable', 'DatatablesController')->name('datatable.index');
// Route::get('/datatable', 'DatatablesController')->name('datatable.index');

Route::get('consejocomunal', [ConsejoComunalController::class, 'index'])->name('consejocomunal');
Route::get('consejocomunal/list', [ConsejoComunalController::class, 'getConsejoComunal'])->name('consejocomunal.list');


Route::get('jornada', [JornadaController::class, 'index'])->name('jornada');
Route::get('jornada/list', [JornadaController::class, 'getJornada'])->name('jornada.list');

Route::get('cambio', [CambioController::class, 'index'])->name('cambio');
Route::get('cambio/list', [CambioController::class, 'getCambio'])->name('cambio.list');

Route::get('combo', [ComboController::class, 'index'])->name('combo');
Route::get('combo/list', [ComboController::class, 'getCombo'])->name('combo.list');

Route::get('venta', [VentaController::class, 'index'])->name('venta');
Route::get('venta/{id}', [VentaController::class, 'getVenta'])->name('venta.list');