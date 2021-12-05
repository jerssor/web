<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HospedajesController;
use App\Http\Controllers\Admin\HuespedesController;
use App\Http\Controllers\Admin\Tipos_hospedajesController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\HabitacionController;
use App\Models\Hospedaje;

Route::get('',[HomeController::class,'index'])->name('admin.home');
Route::resource('users', UserController::class)->only(['index','edit','update'])->names('admin.users');
Route::resource('tipo_hospedaje', Tipos_hospedajesController::class)->names('admin.tipos_hospedajes');
Route::resource('hospedaje', HospedajesController::class)->names('admin.hospedajes');
Route::resource('habitacion', HabitacionController::class)->names('admin.habitaciones');
Route::resource('huesped', HuespedesController::class)->names('admin.huespedes');   