<?php

use App\Livewire\User\Auth\LoginComponent;
use App\Livewire\User\Auth\RegisterComponent;
use App\Livewire\User\Category\CategoriesList;
use App\Livewire\User\Dashboard;
use App\Livewire\User\Expense\ExpenseList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', LoginComponent::class)->name('login');
Route::get('register', RegisterComponent::class)->name('register');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('expenses', ExpenseList::class)->name('expenses');
    Route::get('categories', CategoriesList::class)->name('categories');

});
