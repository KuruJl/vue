<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Главная страница — твоя кастомная Home.vue
Route::get('/', function () {
return Inertia::render('Home');
});
Route::get('/search', function () {
return Inertia::render('Search');
});
Route::get('/room', function () {
return Inertia::render('Room');
});
Route::get('/profilee', function () {
return Inertia::render('Profilee');
 });
// Страница dashboard — доступна только авторизованным и подтверждённым
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Профиль и его маршруты
/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

require __DIR__.'/auth.php';
