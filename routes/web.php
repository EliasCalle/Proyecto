<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\EmailsController;
use App\Http\Controllers\TeEventController;
use App\http\Controllers\TeEventEvent;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;

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
Route::post('/enviarcorreo', [App\Http\Controllers\EmailsController::class, 'enviarcorreo'])->name('enviarcorreo');

Route::post('/login', [LoginController::class, 'login'])->name('login.custom');

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/register', function () {
    return redirect('/login');
})->name('register');

Route::get('/service-worker.js', function () {
    return response(file_get_contents(public_path('service-worker.js')))
        ->header('Content-Type', 'text/javascript');
});

Route::resource('platos', PlatosController::class);
Route::resource('restaurantes', RestauranteController::class);
Route::resource('clientes', ClientesController::class);
Route::resource('emails', EmailsController::class);

Auth::routes();


Route::get('/test', [TeEventController::class, 'testingEvents']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
