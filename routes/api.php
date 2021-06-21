<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\StaffController;
use \App\Http\Controllers\SiteController;
use \App\Http\Controllers\SizeController;
use \App\Http\Controllers\TypeController;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\DriverController;
use \App\Http\Controllers\BinController;
use \App\Http\Controllers\RecoveryCenterController;

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

    // #signup
    // Route::post('signup', [AuthController::class, 'signup']);

    // #signin
    // Route::post('signin', [AuthController::class, 'signin']);

    // Route::middleware('auth:sanctum')->group(function () {

        //me
        // Route::get('me', [AuthController::class, 'me']);

        //STAFF ROUTES
        //save a staff to database
        Route::post('/save/staff', [StaffController::class, 'store'])->name('post:save:staff');

        //fetch a staff from database
        Route::get('/get/staff/{id}', [StaffController::class, 'getStaff'])->name('get:a:staff');

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
        Route::get('/get/site/{id}', [SiteController::class, 'getSite'])->name('get:a:site');

        //fetch all site from database
        Route::get('/get/sites', [SiteController::class, 'index'])->name('get:all:site');

        //update a site from database
        Route::put('/update/site/{id}', [SiteController::class, 'update'])->name('update:a:site');

        //update a site from database
        Route::delete('/delete/site/{id}', [SiteController::class, 'destroy'])->name('delete:a:site');


        //SIZES ROUTES
        //save a size to database
        Route::post('/save/size', [SizeController::class, 'store'])->name('post:save:size');

        //fetch a size from database
        Route::get('/get/size/{id}', [SizeController::class, 'getSize'])->name('get:a:size');

        //fetch all size from database
        Route::get('/get/sizes', [SizeController::class, 'index'])->name('get:all:size');

        //update a size from database
        Route::put('/update/size/{id}', [SizeController::class, 'update'])->name('update:a:size');

        //update a size from database
        Route::delete('/delete/size/{id}', [SizeController::class, 'destroy'])->name('delete:a:size');


        //TYPES ROUTES
        //save a type to database
        Route::post('/save/type', [TypeController::class, 'store'])->name('post:save:type');

        //fetch a type from database
        Route::get('/get/type/{id}', [TypeController::class, 'getType'])->name('get:a:type');

        //fetch all type from database
        Route::get('/get/types', [TypeController::class, 'index'])->name('get:all:type');

        //update a type from database
        Route::put('/update/type/{id}', [TypeController::class, 'update'])->name('update:a:type');

        //update a type from database
        Route::delete('/delete/type/{id}', [TypeController::class, 'destroy'])->name('delete:a:type');


        //DRIVER ROUTES
        //save a driver to database
        Route::post('/save/driver', [DriverController::class, 'store'])->name('post:save:driver');

        //fetch a driver from database
        Route::get('/get/driver/{id}', [DriverController::class, 'getDriver'])->name('get:a:driver');

        //fetch all driver from database
        Route::get('/get/drivers', [DriverController::class, 'index'])->name('get:all:driver');

        //update a driver from database
        Route::put('/update/driver/{id}', [DriverController::class, 'update'])->name('update:a:driver');

        //update a driver from database
        Route::delete('/delete/driver/{id}', [DriverController::class, 'destroy'])->name('delete:a:driver');


        //BIN ROUTES
        //save a bin to database
        Route::post('/save/bin', [BinController::class, 'store'])->name('post:save:bin');

        //fetch a bin from database
        Route::get('/get/bin/{id}', [BinController::class, 'getBin'])->name('get:a:bin');

        //fetch all bin from database
        Route::get('/get/bins', [BinController::class, 'index'])->name('get:all:bin');

        //update a bin from database
        Route::put('/update/bin/{id}', [BinController::class, 'update'])->name('update:a:bin');

        //update a bin from database
        Route::delete('/delete/bin/{id}', [BinController::class, 'destroy'])->name('delete:a:bin');


        //RECOVERY CENTER ROUTES
        //save a bin to database
        Route::post('/save/recovery-center', [RecoveryCenterController::class, 'store'])->name('post:save:recovery-center');

        //fetch a recovery-center from database
        Route::get('/get/recovery-center/{id}', [RecoveryCenterController::class, 'getRecoveryCenter'])->name('get:a:recovery-center');

        //fetch all recovery-center from database
        Route::get('/get/recovery-centers', [RecoveryCenterController::class, 'index'])->name('get:all:recovery-center');

        //update a recovery-center from database
        Route::put('/update/recovery-center/{id}', [RecoveryCenterController::class, 'update'])->name('update:a:recovery-center');

        //update a recovery-center from database
        Route::delete('/delete/recovery-center/{id}', [RecoveryCenterController::class, 'destroy'])->name('delete:a:recovery-center');
    // });
});
