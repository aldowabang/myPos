<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\PosComponent;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/pos', PosComponent::class)
    ->middleware(['auth'])
    ->name('pos');

require __DIR__.'/auth.php';
