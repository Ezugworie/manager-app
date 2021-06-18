<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\StaffController;
use \App\Http\Controllers\SiteController;
use \App\Http\Controllers\SizeController;
use \App\Http\Controllers\TypeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {

    //STAFF ROUTES
    //save a staff to database
    Route::post('/save/staff', [StaffController::class, 'store'])->name('post:save:staff');

    //fetch a staff from database
    Route::get('/get/staff', [StaffController::class, 'getStaff'])->name('get:a:staff');

    //fetch all staff from database
    Route::get('/get/staff', [StaffController::class, 'index'])->name('get:all:staff');

    //update a staff from database
    Route::put('/update/staff/{id}', [StaffController::class, 'update'])->name('update:a:staff');

    //update a staff from database
    Route::delete('/delete/staff/{id}', [StaffController::class, 'destroy'])->name('delete:a:staff');


    //SITES ROUTES
    //save a site to database
    Route::post('/save/site', [SiteController::class, 'store'])->name('post:save:site');

    //fetch a site from database
    Route::get('/get/site', [SiteController::class, 'getSite'])->name('get:a:site');

    //fetch all site from database
    Route::get('/get/site', [SiteController::class, 'index'])->name('get:all:site');

    //update a site from database
    Route::put('/update/site/{id}', [SiteController::class, 'update'])->name('update:a:site');

    //update a site from database
    Route::delete('/delete/site/{id}', [SiteController::class, 'destroy'])->name('delete:a:site');


    //SIZES ROUTES
    //save a size to database
    Route::post('/save/size', [SizeController::class, 'store'])->name('post:save:size');

    //fetch a size from database
    Route::get('/get/size', [SizeController::class, 'getSize'])->name('get:a:size');

    //fetch all size from database
    Route::get('/get/size', [SizeController::class, 'index'])->name('get:all:size');

    //update a size from database
    Route::put('/update/size/{id}', [SizeController::class, 'update'])->name('update:a:size');

    //update a size from database
    Route::delete('/delete/size/{id}', [SizeController::class, 'destroy'])->name('delete:a:size');


    //TYPES ROUTES
    //save a size to database
    Route::post('/save/type', [TypeController::class, 'store'])->name('post:save:type');

    //fetch a type from database
    Route::get('/get/type', [TypeController::class, 'getType'])->name('get:a:type');

    //fetch all type from database
    Route::get('/get/type', [TypeController::class, 'index'])->name('get:all:type');

    //update a type from database
    Route::put('/update/type/{id}', [TypeController::class, 'update'])->name('update:a:type');

    //update a type from database
    Route::delete('/delete/type/{id}', [TypeController::class, 'destroy'])->name('delete:a:type');


});
