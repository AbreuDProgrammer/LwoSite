<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'index'])->name('welcome');
Route::get('/about-me', [PublicController::class, 'about'])->name('about.me');
Route::get('/projects', [PublicController::class, 'projects'])->name('projects');
