<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Studentcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[Studentcontroller::class,'index'])->name('index');
Route::post('/',[Studentcontroller::class,'create']);
Route::get('/edit/{id}',[Studentcontroller::class,'edit'])->name('edit');
Route::put('/edit/{id}',[Studentcontroller::class,'update'])->name('update');

Route::get('/delete/{id}',[Studentcontroller::class,'destroy'])->name('delete');