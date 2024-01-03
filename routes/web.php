<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/add_appointment',[HomeController::class,'add_appointment']); 

Route::get('/show_Form_add_doctor',[AdminController::class,'show_Form_add_doctor']);

Route::post('/add_doctor',[AdminController::class,'add_doctor']);

Route::get('/show_All_doctor',[AdminController::class,'show_All_doctor']);

Route::get('/delete_doctor/{id}',[AdminController::class,'delete_doctor']);

Route::get('/show_edit_Form_doctor/{id}',[AdminController::class,'show_edit_Form_doctor']);

Route::post('/edit_doctor/{id}',[AdminController::class,'edit_doctor']);

Route::get('/show_Form_add_specialty',[AdminController::class,'show_Form_add_specialty']);

Route::post('/add_specialty',[AdminController::class,'add_specialty']);

Route::get('/show_All_specialty',[AdminController::class,'show_All_specialty']);

Route::get('/show_edit_Form_specialty/{id}',[AdminController::class,'show_edit_Form_specialty']);

Route::post('/edit_specialty/{id}',[AdminController::class,'edit_specialty']);

Route::get('/delete_specialty/{id}',[AdminController::class,'delete_specialty']);

Route::get('/show_All_rooms',[AdminController::class,'show_All_rooms']); 

Route::get('/show_All_appointments',[AdminController::class,'show_All_appointments']); 

Route::get('/show_edit_Form_appointment/{id}',[AdminController::class,'show_edit_Form_appointment']);

Route::post('/edit_appointments/{id}',[AdminController::class,'edit_appointments']);








