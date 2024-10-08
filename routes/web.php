<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\registerAdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MessageController;

use App\Http\Controllers\MessageControllerEnglish;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);

Route::middleware('guest')->group(function () {
    Route::get('/login', [SessionsController::class, 'create'])->name('login');
    Route::post('/login', [SessionsController::class, 'login'])->name('login.post');
});
Route::controller(MessageController::class)->group(function () {
    Route::post("/init", 'start');  
    Route::post("/send", 'send');  
});
Route::controller(MessageControllerEnglish::class)->group(function () {
    Route::post("/en/init", 'start');  
    Route::post("/en/send", 'send');  
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/indexjs', [HomeController::class, 'indexjs'])->name('indexjs');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [HomeController::class, 'show'])->name('menu');
Route::get('/chat', [HomeController::class, 'chat'])->name('chat');
Route::get('/contactanos', [HomeController::class, 'contactanos'])->name('contactanos');
Route::get('/pago', [HomeController::class, 'pago'])->name('pago');




Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::middleware('admin.auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/reservasadmin', [AdminController::class, 'reservasAdmin'])->name('admin.reservasAdmin');
    Route::post('/registrar-producto', [AdminController::class, 'createProduct'])->name('admin.createProduct');
    Route::post('/modificar-producto', [AdminController::class, 'updateProduct'])->name('admin.updateProduct');
    Route::get('/eliminar-producto-{id}', [AdminController::class, 'deleteProduct'])->name('admin.deleteProduct');
});

Route::middleware('admin.auth')->group(function () {
    Route::get('/registeradmin', [registerAdminController::class, 'show'])->name('admin.showRegisterAdmin');
    Route::post('/registrar-admin', [registerAdminController::class, 'createAdmin'])->name('admin.createAdmin');
    Route::post('/modificar-admin', [registerAdminController::class, 'updateAdmin'])->name('admin.updateAdmin');
    Route::get('/eliminar-admin-{id}', [registerAdminController::class, 'deleteAdmin'])->name('admin.deleteAdmin');   
});

Route::get('/pago', [CartController::class, 'pago'])->name('pago');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
/*Route::post('/payment/confirmation', [CartController::class, 'Paymentconfirmation'])->name('payment.confirmation');*/

Route::post('/payment/confirmation', [CartController::class, 'Paymentconfirmation'])->name('payment.confirmation');
Route::get('/paymentsuccess', function () {
    return view('home.paymentsuccess'); 
})->name('payment.success.view');


