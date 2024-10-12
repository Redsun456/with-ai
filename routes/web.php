<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ParentInfoController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/appstep1', function () {
    return view('appstep1');
});
Route::get('/appstep2', function () {
    return view('appstep2');
});
Route::get('/appstep3', function () {
    return view('appstep3');
});

Route::resource('parent_infos', ParentInfoController::class);
Route::get('/application', [ApplicationController::class, 'index']);
Route::post('/application/store', [ApplicationController::class, 'store']);
Route::get('/application/edit/{id}', [ApplicationController::class, 'edit']);
Route::post('/application/update/{id}', [ApplicationController::class, 'update']);
Route::delete('/application/delete/{id}', [ApplicationController::class, 'destroy']);