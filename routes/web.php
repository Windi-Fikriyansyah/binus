<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', [AuthController::class, 'showLoginForm']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'create'])->name('register');
Route::post('/simpan-register', [AuthController::class, 'register'])->name('simpan_register');



Route::middleware(['auth'])->group(function () {
    Route::get('/app', [StudentController::class, 'index'])->name('student.app');
    Route::get('/Academic', [StudentController::class, 'academy'])->name('student.academy');
    Route::get('/Financial', [StudentController::class, 'financial'])->name('student.financial');
    Route::get('/Financial-Summary', [StudentController::class, 'summary'])->name('student.summary');
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/student/dashboard', [AuthController::class, 'showDashboardstudent'])->name('student.dashboard')->middleware('auth', 'role:student');
