<?php

use App\Livewire\Admin\Auth\LoginComponent;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Users\UserList;
use Illuminate\Support\Facades\Route;

Route::get('login', LoginComponent::class)->name('login');

Route::group(['middleware' => ['admin.auth']], function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('users', UserList::class)->name('users');
});
