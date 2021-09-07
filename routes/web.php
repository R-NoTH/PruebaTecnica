<?php

use App\Http\Controllers\ImportController;
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
// Route::resource('/imports', ImportController::class);
Route::get(
    '/imports',
    [ImportController::class, 'importForm']
)->name('importForm');

Route::post(
    '/imports/clientes',
    [ImportController::class, 'importCliente']
)->name('importClientes');

Route::post(
    '/imports/pagos',
    [ImportController::class, 'importPago']
)->name('importPagos');

Route::post(
    '/imports/updatePagos',
    [ImportController::class, 'updatePago']
)->name('updatePagos');

Route::get(
    '/exports',
    [ImportController::class, 'export']
)->name('exports');
