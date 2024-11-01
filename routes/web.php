<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;


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
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


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

    Route::get('/admin/application-review', [ApplicationController::class, 'showReview'])->name('application.review');
    Route::get('/admin/view-application/{id}', [ApplicationController::class, 'viewApplication'])->name('application.view');
    Route::delete('/admin/delete-application/{id}', [ApplicationController::class, 'delete'])->name('delete-application');
    Route::get('/admin/application-review', [ApplicationController::class, 'index'])->name('application-review');
    Route::post('/admin/applicants/{id}/approve', [ApplicationController::class, 'approve'])->name('applicants.approve');
    Route::post('/admin/applicants/{id}/reject', [ApplicationController::class, 'reject'])->name('applicants.reject');



    
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

    Route::get('/assigned-dept', function () {
        return view('user.assigneddept');
    });
    Route::get('/schedule', function () {
        return view('user.schedule');
    });

    Route::get('/attendance', function () {
        return view('user.attendance');
    });

    
    Route::get('/concerns', function () {
        return view('user.concerns');
    });

    
    Route::get('/notifications', function () {
        return view('user.notifications');
    });


    Route::get('/concerns', function () {
        return view('user.concerns');
    });

});


Route::get('application/step1', function () {
    return view('application.step1');
});
Route::get('application/step2', function () {
    return view('application.step2');
});

Route::get('application/summary', function () {
    return view('application.summary');
});

Route::get('/application/step1', [ApplicationController::class, 'showStep1'])->name('application.step1');
Route::post('/application/step1', [ApplicationController::class, 'storeStep1'])->name('application.storeStep1');

Route::get('/application/step2', [ApplicationController::class, 'showStep2'])->name('application.step2');
Route::post('/application/step2', [ApplicationController::class, 'storeStep2'])->name('application.storeStep2');

Route::get('/application/summary', [ApplicationController::class, 'showSummary'])->name('application.summary');
Route::post('/application/confirm', [ApplicationController::class, 'confirmApplication'])->name('application.confirm');

Route::get('/application/success', [ApplicationController::class, 'showSuccess'])->name('application.success');
