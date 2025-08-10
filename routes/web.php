<?php

use App\Livewire\User\Auth\LoginComponent;
use App\Livewire\User\Auth\RegisterComponent;
use App\Livewire\User\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', LoginComponent::class)->name('login');
Route::get('register', RegisterComponent::class)->name('register');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');
});
