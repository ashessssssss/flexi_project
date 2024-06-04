<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Rutas de autenticación
Auth::routes();

// Página de bienvenida
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Ruta al home
Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

// Rutas de controladores
Route::get('/productos', [\App\Http\Controllers\ProductosController::class, 'index'])->name('productos');
Route::get('/servicios', [\App\Http\Controllers\ServiciosController::class, 'index'])->name('servicios');
Route::get('/payments', [\App\Http\Controllers\PaymentsController::class, 'index'])->name('payments');

Route::middleware(['auth','role:user'])->group(function(){
   Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboard'])->name('usuario.dashboard');
   Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'index'])->name('usuario.profile');
   Route::post('/profile/update', [\App\Http\Controllers\ProfileController::class, 'updateProfile'])->name('usuario.profile.update');
   Route::post('/profile/update/password', [\App\Http\Controllers\ProfileController::class, 'updatePassword'])->name('usuario.password.update');


});
// Rutas de recursos
Route::resource('/products', App\Http\Controllers\ProductController::class);
Route::resource('/people', App\Http\Controllers\PersonController::class);
Route::resource('/positions', App\Http\Controllers\PositionController::class);
Route::resource('/workers', App\Http\Controllers\WorkerController::class);
Route::resource('/clients', App\Http\Controllers\ClientController::class);
Route::resource('/type-services', App\Http\Controllers\TypeServiceController::class);
Route::resource('/services', App\Http\Controllers\ServiceController::class);
Route::resource('/providers', App\Http\Controllers\ProviderController::class);
Route::resource('/brands', App\Http\Controllers\BrandController::class);
Route::resource('/categories', App\Http\Controllers\CategoryController::class);
Route::resource('/vehicles', App\Http\Controllers\VehicleController::class);
Route::resource('/appoiments', App\Http\Controllers\AppoimentController::class);
Route::resource('/type-products', App\Http\Controllers\TypeProductController::class);
