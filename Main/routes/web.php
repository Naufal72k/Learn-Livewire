<?php

use App\Livewire\HabitList;
use App\Livewire\TodoList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/todo' ,TodoList::class);
Route::get('/habit', HabitList::class);
