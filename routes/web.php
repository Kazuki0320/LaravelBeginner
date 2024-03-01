<?php

use App\Http\Controllers\GolfController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PersonController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('hello', [HelloController::class, 'form']);
Route::post('hello', [HelloController::class, 'post']);
Route::get('test', [TestController::class, 'test']);
Route::get('person', [PersonController::class, 'index'])->name('person.index');
Route::get('golf', [GolfController::class, 'playGolf']);

