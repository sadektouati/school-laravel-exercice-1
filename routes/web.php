<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TpController;

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

Route::get('/', [TpController::class, 'index'])->name('index');
Route::get('/features', [TpController::class, 'features'])->name('features');
Route::get('/pricing', [TpController::class, 'pricing'])->name('pricing');
Route::get('/blog', [TpController::class, 'blog'])->name('blog');
Route::get('/contact', [TpController::class, 'contact'])->name('contact');
Route::post('/contact', [TpController::class, 'sendContact'])->name('send.contact');
