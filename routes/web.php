<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layouts.index');
});

Route::get('/login', [HomeController::class, 'LoginPage'])->middleware('preventBackHistory');
Route::post('/login', [HomeController::class, 'LoginPost'])->name('LogPost');

Route::get('/logout', [HomeController::class, 'logout']);


Route::group(['middleware' => ['web','check-seller','preventBackHistory']],function(){

    Route::get('/seller/dashboard', [HomeController::class, 'SellerDashboard']);
});

