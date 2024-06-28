<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Login',function(){
    return view('Login');
});

Route::get('/StaffRegister',function(){
    return view('Staffs/StaffRegister');
});

Route::get('/Dashboard',function(){
    return view('Admin_Dashboard\Dashboard');
});

Route::post('/StaffRegister',[App\Http\Controllers\StaffController::class,'store']);

Route::post('/Login', [App\Http\Controllers\UserAuthController::class, 'Login']);

Route::get('/Manufacturers',function(){
    return view('Manufacturers/Manufacturers');
});

Route::post('/Manufacturers',[\App\Http\Controllers\ManufacturerController::class,'store']);

Route::get('/api/Manufacturers',[\App\Http\Controllers\ManufacturerController::class,'index']);
Route::get('/get/Manufacturers/{id}',[\App\Http\Controllers\ManufacturerController::class,'show']);
// Route::get('/api/Manufacturers',[\App\Http\Controllers\ManufacturerController::class,'manGet']);
