<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicController;
use App\Http\Controllers\LanguageController;

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

Route::get('/lang/{lang}', [LanguageController::class, 'index'])->name('lang');

Route::get('/', [PublicController::class, 'index'])->name('welcome');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/projects', [PublicController::class, 'projects'])->name('projects');
