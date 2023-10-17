<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatosController;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\TeEventController;
use App\http\Controllers\TeEventEvent;
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
    return view('welcome');
});
Route::get('/service-worker.js', function () {
    return response(file_get_contents(public_path('service-worker.js')))
        ->header('Content-Type', 'text/javascript');
});
Route::resource('platos', PlatosController::class);
Route::resource('restaurantes', RestauranteController::class);
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function(){
    return view('welcome');
});

Route::get('/test',[TeEventController::class , 'testingEvents']);