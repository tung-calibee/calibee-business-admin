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
    return view('auth.login');
});

Route::group([
    'as'     => 'booking.',
    'prefix' => 'booking',
], function () {
    Route::get('/', function () {
        return view('booking.index');
    })->name('index');
    
    Route::get('/detail', function () {
        return view('booking.detail');
    })->name('detail');
    
    Route::get('/job', function () {
        return view('booking.job');
    })->name('job');
});

Route::group([
    'as'     => 'company.',
    'prefix' => 'company',
], function () {
    Route::get('/', function () {
        return view('company.index');
    })->name('index');
});