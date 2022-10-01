<?php

use Illuminate\Support\Facades\Route;

    Route::group(['middleware'=> ['a-check']],function() {

        Route::name('admin.')->group(function () {
            Route::resource('blogs', App\Http\Controllers\Admin\BlogController::class);
        });

        Route::get('/', function () {return view('dashboard');})->name('dashboard');
    });

