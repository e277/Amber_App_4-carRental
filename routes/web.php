<?php

use App\Http\Controllers\Admin\CarsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/','welcome');
Route::view('/rent-a-car','rent')->name('rent');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('admin/dashboard/', [CarsController::class, 'adminIndex'])->name('admin');
    Route::get('admin/dashboard/car-details', [CarsController::class, 'listOfCars']);
});

// Testing routes
Route::view('test', 'test');