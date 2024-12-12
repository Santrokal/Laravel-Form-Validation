<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('user/create', [ HomeController::class, 'create' ]);
Route::post('user/store', [ HomeController::class, 'store' ]);

Route::get('student/create', [ StudentController::class, 'create' ]);
Route::post('student/store', [ StudentController::class, 'store' ]);
