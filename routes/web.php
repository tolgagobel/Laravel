<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctorcontroller;
use App\Http\Controllers\TreatmentController;




Route::get('/',[Doctorcontroller::class,'getIndex'])->name('index');
Route::get('/treatments/{doctor}',[TreatmentController::class,'tedavi'])->name('treatments');


Route::get('/deneme',[Doctorcontroller::class,'getdoctor']);

Route::get('/doctorkayit',[Doctorcontroller::class,'index'])->name('doctorkayit');
Route::post('doctorkayit-sonuc',[Doctorcontroller::class,'doktorekle'])->name('doctorkayit-sonuc');
Route::get('/delete/{doctor_id}',[Doctorcontroller::class,'doktordelete'])->name('delete');


Route::get('/tedavikayit',[TreatmentController::class,'tedavikayit'])->name('treatmentkayit');
Route::post('/tedavikayit-detay',[TreatmentController::class,'tedavikayitpost'])->name('tedavi-detay');

Route::get('/treatment/{treatment}',[TreatmentController::class,'edit'])->name('tedavi');
Route::post('/treatmentupdate/{treatment}',[TreatmentController::class,'tedaviupdate'])->name('tedaviupdate');
