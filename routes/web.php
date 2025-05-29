<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitudController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('solicitud', SolicitudController::class);
Route::get('/solicitud/create', [SolicitudController::class, 'create'])->name('solicitud.create');
Route::post('/solicitud', [SolicitudController::class, 'store'])->name('solicitud.store');
Route::resource('solicitud', \App\Http\Controllers\SolicitudController::class);
Route::put('/solicitud/{id}', [SolicitudController::class, 'update'])->name('solicitud.update');
Route::delete('/solicitud/{id}', [SolicitudController::class, 'destroy'])->name('solicitud.destroy');



