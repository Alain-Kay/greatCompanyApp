<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/A-propos', [MainController::class, 'about'])->name('A-propos');
Route::get('/Nos-services', [MainController::class, 'services'])->name('Nos-services');
Route::get('/Contact', [MainController::class, 'contact'])->name('Contact');
Route::get('/Offres-demplois', [MainController::class, 'offres'])->name('Offres-demplois');


