<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Http;
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

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/corsi', [PageController::class, 'corsi'])->name('corsi');
Route::get('/corsi/{name}', [PageController::class, 'detail'])->name('detail');

Route::get('/contatti', [PageController::class, 'contact'])->name('contact');
Route::post('/invia', [PageController::class, 'send'])->name('send');

Route::get('/grazie', function () {
    return 'Grazie';
})->name('thank');