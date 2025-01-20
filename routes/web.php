<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

ROUTE::GET('/', [AuthController::class, 'show_login'])->name('show_login');
ROUTE::POST('/', [AuthController::class, 'login'])->name('login');
ROUTE::GET('auth_register', [AuthController::class, 'show_register'])->name('show_register');;
ROUTE::POST('auth_register', [AuthController::class, 'register'])->name('register');;
