<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\HospedajeController;
use App\Http\Controllers\HuespedController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\Tipo_hospedajeController;
use App\Http\Controllers\welcomeController;
use App\Mail\ContactoMailable;
use App\Models\Habitacion;
use Doctrine\DBAL\Schema\Index;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Mail;


Route::get('/', welcomeController::class);

Route::get('/prueba', HomeController::class);

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contacto', [ContactoController::class, 'index'])->name('contacto.index');

Route::post('contacto', [ContactoController::class, 'store'])->name('contacto.store');

/*Route::get('/registro', [RegistroController::class,'index'])->name('registro.index');
Route::get('/registro/create', [RegistroController::class,'create'])->name('registro.create');
Route::post('registro', [RegistroController::class,'store'])->name('registro.store');
Route::get('/registro/{registro}', [RegistroController::class,'show'])->name('registro.show');
Route::get('registro/{registro}/edit', [RegistroController::class,'edit'])->name('registro.edit');
Route::put('registro/{registro}', [RegistroController::class,'update'])->name('registro.update');
Route::delete('registro,{registro}' , [RegistroController::class,'destroy'])->name('registro.destroy');*/

// Route::resource('ZonaHistorica', RegistroController::class)->parameters(['ZonaHistorica' => 'registro'])->names('registro');



//Huesped

Route::get('/huesped', [HuespedController::class, 'index'])->name('huesped');
Route::get('/huesped/create', [HuespedController::class, 'create'])->name('huesped.create');
Route::post('huesped', [HuespedController::class, 'store'])->name('huesped.store');
Route::get('/huesped/{huesped}',[HuespedController::class, 'show'])->name('huesped.show');
Route::get('/huesped/{huesped}/edit',[HuespedController::class, 'edit'])->name('huesped.edit');
Route::put('/huesped/{huesped}',[HuespedController::class, 'update'])->name('huesped.update');
//Tipos de Hospedaje

// Route::get('/tipo_hospedaje', [Tipo_hospedajeController::class, 'index'])->name('tipo_hospedaje');
// Route::get('/tipo_hospedaje/create', [Tipo_hospedajeController::class, 'create'])->name('tipo_hospedaje.create');
// Route::get('/tipo_hospedaje/{id}', [Tipo_hospedajeController::class, 'show'])->name('tipo_hospedaje.show');

Route::resource('tipo_hospedaje',Tipo_hospedajeController::class);

//Hospedaje
// Route::get('/hospedaje', [HospedajeController::class, 'index'])->name('hospedaje.index');
// Route::get('/hospedaje/create', [HospedajeController::class, 'create'])->name('hospedaje.create');;
// Route::get('/hospedaje/{hospedaje}', [HospedajeController::class, 'show'])->name('hospedaje.show');
// Route::post('/hospedaje', [HospedajeController::class, 'store'])->name('hospedaje.store');
// Route::get('/hospedaje/{hospedaje}/edit', [HospedajeController::class, 'edit'])->name('hospedaje.edit');
// Route::put('/hospedaje/{hospedaje}', [HospedajeController::class, 'update'])->name('hospedaje.update');
// Route::delete('/hospedaje/{hospedaje}', [HospedajeController::class, 'destroy'])->name('hospedaje.destroy');

Route::resource('hospedaje',HospedajeController::class)->names('hospedaje');
//Habitacion
// Route::get('/habitacion', [HospedajeController::class, 'index']);
// Route::get('/habitacion/create', [HospedajeController::class, 'create']);
// Route::get('/habitacion/{id}', [HospedajeController::class, 'show'])->name('habitacion.show');

Route::resource('habitacion',HabitacionController::class);

//Reservas
// Route::get('/reserva', [ReservaController::class, 'index']);
// Route::get('/reserva/create', [ReservaController::class, 'create']);
// Route::get('/reserva/{Hospedaje}', [ReservaController::class, 'show']);

Route::resource('reserva',ReservaController::class);


Route::middleware(['auth:sanctum', 'verified'])->get(
    '/dashboard',
    function () {
        return view('dashboard');
    }
)->name('dashboard');
