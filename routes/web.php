<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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

Route::get('/', [DataController::class, 'fileImportExport']);
Route::post('file-import', [DataController::class, 'fileImport'])->name('file-import');
Route::get('file-export', [DataController::class, 'fileExport'])->name('file-export');
Route::get('file-reset', [DataController::class, 'fileReset'])->name('file-reset');
Route::get('/data-show', [DataController::class, 'showData'])->name('data-show');
// Route::get('/data-search', [DataController::class, 'fillteringData'])->name('data-search');
Route::any('/data-search', [DataController::class, 'fillteringData'])->name('data-search');
