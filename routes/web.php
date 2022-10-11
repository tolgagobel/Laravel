<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctorcontroller;




Route::get('/',[Doctorcontroller::class,'getIndex'])->name('index');
Route::get('/treatments/{doctor_id}',[Doctorcontroller::class,'tedavi'])->name('treatments');


Route::get('/deneme',[Doctorcontroller::class,'getdoctor']);

Route::get('/doctorkayit',[Doctorcontroller::class,'index'])->name('doctorkayit');
Route::post('doctorkayit-sonuc',[Doctorcontroller::class,'ekle'])->name('doctorkayit-sonuc');
Route::get('/delete/{doctor_id}',[Doctorcontroller::class,'delete'])->name('delete');
Route::get('/update/{doctor_id}',[Doctorcontroller::class,'update'])->name('update');
