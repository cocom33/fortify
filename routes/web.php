<?php

use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Profile\UpdatePasswordController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
route::middleware('auth', 'verified')->group(function () {
    route::view('/dashboard', 'dashboard');

    route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    route::put('/profile/edit', [ProfileController::class, 'updateProfileInfomation']);

    route::get('/password/edit', [UpdatePasswordController::class, 'edit'])->name('password.edit');
    route::put('/password/edit', [UpdatePasswordController::class, 'updatePassword']);
});
