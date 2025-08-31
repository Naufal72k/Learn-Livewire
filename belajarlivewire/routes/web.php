<?php

use App\Http\Controllers\TestController;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\ShowPost;
use App\Livewire\Test;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/counter', Counter::class);
Route::get('/create-post', CreatePost::class);

Route::get("/show-post", ShowPost::class);


Route::get('/test/{nama}', Test::class);
// Route::get('/test/{name}', Test::class); ini kalo mau langsung megikuti nama
Route::get('/about', About::class);
Route::get('/contact', Contact::class);
