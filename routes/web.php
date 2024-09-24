<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\AdminController;

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');

    Route::get('/manage-leaves', [AdminController::class, 'manageLeaves'])->name('admin.manage-leaves');

    Route::get('/manage-users', [AdminController::class, 'manageUsers'])->name('admin.manage-users');

    Route::get('/pending-leaves', [AdminController::class, 'pendingLeaves'])->name('admin.pending-leaves');

    Route::get('/approved-leaves', [AdminController::class, 'approvedLeaves'])->name('admin.approved-leaves');

    Route::get('/denied-leaves', [AdminController::class, 'deniedLeaves'])->name('admin.denied-leaves');

    Route::post('/leave/{id}/approve', [AdminController::class, 'approveLeave'])->name('admin.approve-leave');

    Route::post('/leave/{id}/deny', [AdminController::class, 'denyLeave'])->name('admin.deny-leave');

    Route::get('/monthly-leave-report', [AdminController::class, 'monthlyReport'])->name('admin.monthly-report');

    Route::delete('/users/{id}', [AdminController::class, 'deleteUser'])->name('admin.users.destroy');



});

Route::middleware(['auth'])->prefix('user')->group(function () {

    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user-dashboard');

    Route::get('/leaves', [UserController::class, 'leaves'])->name('user.leaves');

    Route::get('/leave/create', [LeaveController::class, 'create'])->name('leave.create');

    Route::post('/leave', [LeaveController::class, 'store'])->name('leave.store');

    Route::get('/leaves/{id}/edit', [LeaveController::class, 'edit'])->name('leave.edit');

    Route::put('/leaves/{id}', [LeaveController::class, 'update'])->name('leave.update');

    Route::delete('/leaves/{id}', [LeaveController::class, 'destroy'])->name('leave.destroy');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'showRegisterForm'])->name('register')->middleware('guest');

Route::post('/register', [LoginController::class, 'register'])->name('register.post');

Route::get('/', function () {
    return view('index');
})->name('home');

