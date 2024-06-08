<?php

use App\Http\Controllers\AppoimentController;
use App\Http\Controllers\CitasController;

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InventaryController;
use App\Http\Controllers\InventoryOutputController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TypeProductController;
use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AutomovilesController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TypeServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;






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
Route::get('/servicios', [\App\Http\Controllers\ServiciosController::class, 'index'])->name('servicios');

   Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboard'])->name('usuario.dashboard');
//Rutas de perfil
   Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'index'])->name('usuario.profile');
   Route::post('/profile/update', [\App\Http\Controllers\ProfileController::class, 'updateProfile'])->name('usuario.profile.update');
   Route::post('/profile/update/password', [\App\Http\Controllers\ProfileController::class, 'updatePassword'])->name('usuario.password.update');
//Rutas de automoviles
Route::get('/automoviles', [AutomovilesController::class, 'index'])->name('usuario.automoviles.index');
Route::get('/automoviles/create', [AutomovilesController::class, 'create'])->name('usuario.automoviles.create');
Route::post('/automoviles', [AutomovilesController::class, 'store'])->name('usuario.automoviles.store');
Route::get('/automoviles/{id}/edit', [AutomovilesController::class, 'edit'])->name('usuario.automoviles.edit');
Route::put('/automoviles/{id}', [AutomovilesController::class, 'update'])->name('usuario.automoviles.update');
Route::delete('/automoviles/{id}', [AutomovilesController::class, 'destroy'])->name('usuario.automoviles.destroy');
//Rutas de citas

Route::get('usuario/citas', [CitasController::class, 'index'])->name('usuario.citas.index');
Route::get('usuario/citas/create', [CitasController::class, 'create'])->name('usuario.citas.create');
Route::post('usuario/citas', [CitasController::class, 'store'])->name('usuario.citas.store');
Route::get('usuario/citas/{id}/edit', [CitasController::class, 'edit'])->name('usuario.citas.edit');
Route::put('usuario/citas/{id}', [CitasController::class, 'update'])->name('usuario.citas.update');
Route::delete('usuario/citas/{id}', [CitasController::class, 'destroy'])->name('usuario.citas.destroy');





// Rutas de recursos
Route::resource('/products', App\Http\Controllers\ProductController::class);
Route::get('download-pdf1', [ProductController::class,'downloadPDF'])->name('product.pdf');
Route::resource('/positions', App\Http\Controllers\PositionController::class);
Route::get('download-pdf2', [PositionController::class,'downloadPDF'])->name('position.pdf');
Route::resource('/workers', App\Http\Controllers\WorkerController::class);
Route::get('download-pdf3', [WorkerController::class,'downloadPDF'])->name('worker.pdf');
Route::resource('/clients', App\Http\Controllers\ClientController::class);
Route::get('download-pdf4', [ClientController::class,'downloadPDF'])->name('client.pdf');
Route::resource('/type-services', App\Http\Controllers\TypeServiceController::class);
Route::resource('/services', App\Http\Controllers\ServiceController::class);
Route::get('download-pdf6', [ServiceController::class,'downloadPDF'])->name('service.pdf');
Route::resource('/providers', App\Http\Controllers\ProviderController::class);
Route::get('download-pdf7', [ProviderController::class,'downloadPDF'])->name('provider.pdf');
Route::resource('/brands', App\Http\Controllers\BrandController::class);
Route::get('download-pdf8', [BrandController::class,'downloadPDF'])->name('brand.pdf');
Route::resource('/categories', App\Http\Controllers\CategoryController::class);
Route::get('download-pdf9', [CategoryController::class,'downloadPDF'])->name('category.pdf');
Route::resource('/type-products', App\Http\Controllers\TypeProductController::class);
Route::resource('/users', App\Http\Controllers\UserController::class);
Route::get('download-pdf11', [UserController::class,'downloadPDF'])->name('user.pdf');
Route::resource('/vehicles', App\Http\Controllers\VehicleController::class);
Route::get('download-pdf12', [VehicleController::class,'downloadPDF'])->name('vehicle.pdf');
Route::resource('/appoiments', App\Http\Controllers\AppoimentController::class);
Route::get('download-pdf13', [AppoimentController::class,'downloadPDF'])->name('appoiment.pdf');
Route::resource('/receipts', App\Http\Controllers\ReceiptController::class);
Route::get('download-pdf14', [ReceiptController::class,'downloadPDF'])->name('receipt.pdf');
Route::resource('/inventaries', App\Http\Controllers\InventaryController::class);
Route::resource('/inventory-outputs', App\Http\Controllers\InventoryOutputController::class);

