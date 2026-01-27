<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mon-planning', function () {
    return view('schedule.index');
});

Route::get('/mon-planning/ajouter', function () {
    return view('schedule.create');
});

Route::get('/mon-planning/modifier', function () {
    return view('schedule.edit');
});
use App\Http\Controllers\ScheduleController;

// Cette route affiche le planning uniquement si l'utilisateur est connecté
Route::middleware(['auth'])->group(function () {
    Route::get('/mon-planning', [ScheduleController::class, 'index'])->name('schedule.index');
});
