<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Passwords\Confirm;
use App\Livewire\Auth\Passwords\Email;
use App\Livewire\Auth\Passwords\Reset;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Verify;
use App\Livewire\Test;
use Illuminate\Support\Facades\Route;
use App\Livewire\Client\Landingpage;
use App\livewire\Client\PilihProgram;
use App\livewire\Client\IsiBiodata;

Route::get('/', LandingPage::class)
        ->name('landingpage');

Route::get('/pilihprogram', PilihProgram::class)
        ->name('pilihprogram');

Route::get('/isibiodata', IsiBiodata::class)
        ->name('IsiBiodata');

// Route::middleware('guest')->group(function () {
//     Route::get('login', Login::class)
//         ->name('login');

//     Route::get('register', Register::class)
//         ->name('register');
// });

// Route::middleware('auth')->group(function () {

//     Route::post('logout', LogoutController::class)
//         ->name('logout');
// });
