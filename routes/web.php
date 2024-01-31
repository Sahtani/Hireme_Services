<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\serviceController;
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

Route::get('/', [serviceController::class, 'index'])->name('services.index'); 
Route::get('/add', [serviceController::class, 'add'])->name('services.add');