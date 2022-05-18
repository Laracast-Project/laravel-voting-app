<?php

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

Route::get('/', [\App\Http\Controllers\IdeaController::class, 'index'])->name('idea.index');
Route::get('/ideas/{idea:slug}', [\App\Http\Controllers\IdeaController::class, 'show'])->name('idea.show');

require __DIR__.'/auth.php';
