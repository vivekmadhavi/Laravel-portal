<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\socialController;




Route::get('/', function () {
    return view('welcome');
});


Route::view('/loginPage','loginPage');
Route::view('/registerPage','registerPage');
Route::get('/logout', [loginController::class, 'destroy']);
Route::get('/userLogin', function () {
    return redirect('/loginPage')->with('error', 'Please login from the login form.');
});

Route::post('/RegisterData',[registerController::class,'addUser']);
Route::post('/userLogin',[loginController::class,'checkUser']);

Route::middleware(['check1'])->group(function () {
    Route::get('/admindashboard', [adminController::class, 'userData'])->name('admindashboard');
    Route::get('/delete/{id}',[adminController::class,'userDelete']);
    Route::get('/update/{id}',[adminController::class,'userDetail']);
    Route::post('/userUpdates',[adminController::class,'userUpdate']);
    Route::post('/deleteall',[adminController::class,'deleteall']);
});



Route::get('/auth/google',[socialController::class,'redirectToGoogle']);
Route::get('/auth/google/callback', [SocialController::class, 'handleGoogleCallback']);


Route::get('/auth/github', [socialController::class, 'redirectToGithub']);
Route::get('/auth/github/callback', [socialController::class, 'handleGithubCallback']);

