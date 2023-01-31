<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

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

Route::get('/', [EmailController::class, 'show']);

Route::get('/mail', [EmailController::class, 'index']);

Route::get('/email/{keyunik}', [EmailController::class, 'email'])->name('email');

Route::get('/export/{keyunik}', [EmailController::class, 'export'])->name('export');

Route::get('/feedback/{keyunik}', [EmailController::class, 'feedback'])->name('feedback');