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
