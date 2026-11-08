<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContenuController;
use App\Http\Controllers\AuthController;

Route::get('/', [PageController::class, 'accueil'])->name('accueil');
Route::get('/a-propos', [PageController::class, 'aPropos'])->name('a-propos');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/contenus', [ContenuController::class, 'index'])->name('contenus.index');

Route::middleware('auth')->group(function () {
    Route::get('/contenus/creer', [ContenuController::class, 'create'])->name('contenus.create');
    Route::post('/contenus', [ContenuController::class, 'store'])->name('contenus.store');
    Route::get('/contenus/{publication}/modifier', [ContenuController::class, 'edit'])->name('contenus.edit');
    Route::put('/contenus/{publication}', [ContenuController::class, 'update'])->name('contenus.update');
    Route::delete('/contenus/{publication}', [ContenuController::class, 'destroy'])->name('contenus.destroy');
    Route::post('/contenus/{publication}/commentaires', [ContenuController::class, 'storeCommentaire'])->name('commentaires.store');
});

Route::get('/contenus/{publication}', [ContenuController::class, 'show'])->name('contenus.show');