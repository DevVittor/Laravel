<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::get('/policy', [EventController::class, 'showPolicy']);
Route::post('/events', [EventController::class, 'store']);

Route::get('/sobre', function () {
    return view('sobre');
});
/*Route::get('/policy', function () {
    return view('policy');
});*/
Route::fallback(function () {
    return view('404');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
