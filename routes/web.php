<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ParentInfoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Define routes for authenticated users
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/admin/admin-profile', function () {
    return view('admin.admin-profile');
    });

    Route::get('/admin/announcement', function () {
    return view('admin.announcement');
    });

    Route::get('/admin/application-review', function () {
        return view('admin.application-review');
    });

    Route::get('/admin/view-application', function () {
        return view('admin.view-application');
    });

    Route::get('/admin/user-account-management', function () {
        return view('admin.admin-user-account-management');
    });

    Route::get('/admin/user-account-management', [UserController::class, 'index'])->name('user-management');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/search', [UserController::class, 'search'])->name('users.search');
    
    Route::resource('users', UserController::class);
    Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('users.update');

    Route::get('/admin/disbursement', function () {
        return view('admin.disbursement');
    });

    Route::get('/admin/sa-list', function () {
        return view('admin.admin-sa-list');
    });

    Route::get('/admin/sa-attendance', function () {
        return view('admin.admin-sa-attendance');
    });

    Route::get('/admin/sa-scheduling', function () {
        return view('admin.admin-sa-scheduling');
    });

    Route::get('/admin/department-assignment', function () {
        return view('admin.admin-department-assignment');
    });

    Route::get('/admin/concerns', function () {
        return view('admin.concerns');
    });

});



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    });

    Route::get('/profile', function () {
        return view('user.profile');
     });

    Route::get('/application-tracker', function () {
        return view('user.applicationtracker');
    });

    Route::get('/concerns', function () {
        return view('user.concerns');
    });

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

