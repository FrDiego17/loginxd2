<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\registerAdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);

Route::middleware('guest')->group(function () {
    Route::get('/login', [SessionsController::class, 'create'])->name('login');
    Route::post('/login', [SessionsController::class, 'login'])->name('login.post');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [HomeController::class, 'show'])->name('menu');
Route::get('/chat', [HomeController::class, 'chat'])->name('chat');
Route::get('/contactanos', [HomeController::class, 'contactanos'])->name('contactanos');


Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::middleware('admin.auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/registrar-producto', [AdminController::class, 'createProduct'])->name('admin.createProduct');
    Route::post('/modificar-producto', [AdminController::class, 'updateProduct'])->name('admin.updateProduct');
    Route::get('/eliminar-producto-{id}', [AdminController::class, 'deleteProduct'])->name('admin.deleteProduct');
});


Route::post('/registrar-producto', [AdminController::class, 'create'])->name('admin.create');

Route::post('/modificar-producto', [AdminController::class, 'update'])->name('admin.update');

Route::get('/eliminar-producto-{id}', [AdminController::class, 'delete'])->name('admin.delete');

/*ruta para elchat */
Route::middleware('admin.auth')->group(function () {
    Route::get('/registeradmin', [registerAdminController::class, 'show'])->name('admin.showRegisterAdmin');
    Route::post('/registrar-admin', [registerAdminController::class, 'createAdmin'])->name('admin.createAdmin');
    Route::post('/modificar-admin', [registerAdminController::class, 'updateAdmin'])->name('admin.updateAdmin');
    Route::get('/eliminar-admin-{id}', [registerAdminController::class, 'deleteAdmin'])->name('admin.deleteAdmin');   
});

