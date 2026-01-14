<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\CompanyAuthController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\CustomerAuthController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [AuthenticatedSessionController::class, 'create'])
        ->name('guest.register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');
    
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

//Auth Routes for Customers
Route::middleware('guest:customer')->group(function () {

Route::get('user/login', [CustomerAuthController::class, 'loginform'])->name('user.login');
Route::get('user/register', [CustomerAuthController::class, 'registerform'])->name('user.register');
Route::post('user/register', [CustomerAuthController::class, 'register'])->name('user.register.submit');
Route::post('user/login', [CustomerAuthController::class, 'login'])->name('user.login.submit');

});
Route::middleware('auth:customer')->group(function () {
    
Route::post('user/logout', [CustomerAuthController::class, 'destroy'])->name('user.logout');
Route::get('user/dashboard',function(){
    return view('welcome');
})->name('user.dashboard');

});
//Auth Routes for Company
Route::middleware('guest:company')->group(function () {
    Route::get('company/login', [CompanyAuthController::class, 'loginform'])->name('company.login');
    Route::get('company/register', [CompanyAuthController::class, 'registerform'])->name('company.register');
    Route::post('company/register', [CompanyAuthController::class, 'register'])->name('company.register.submit');
    Route::post('company/login', [CompanyAuthController::class, 'login'])->name('company.login.submit');
});

Route::middleware('auth:company')->group(function () {
    Route::post('company/logout', [CompanyAuthController::class, 'destroy'])->name('company.logout');
    Route::get('company/dashboard', function () {
        return view('dashboard');
    })->name('company.dashboard');
});