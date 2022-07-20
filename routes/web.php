<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BookController;



Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthController::class, 'welcome']);
    Route::get('/register', [AuthController::class, 'register_view'])->name('register_view');
    Route::post('/register/store', [AuthController::class, 'register'])->name('register');
    Route::get('/login', [AuthController::class, 'login_view'])->name('login_view');
    Route::post('/login/store', [AuthController::class, 'login'])->name('login');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [AuthController::class, 'home'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


    Route::prefix('roles')->group(function () {
        Route::get('/', [RoleController::class, 'index'])->name('role-list');

      //    Route::get('/new', [RoleController::class, 'create'])->name('role-create');
     //    Route::post('/new/store', [RoleController::class, 'store'])->name('role-store');
   });

    Route::middleware(['isAdmin'])->resource('books', BookController::class);
});



