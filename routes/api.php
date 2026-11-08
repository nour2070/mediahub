<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PublicationController;

Route::get('/publications', [PublicationController::class, 'index']);
Route::get('/publications/{publication}', [PublicationController::class, 'show']);