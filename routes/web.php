<?php

use App\Http\Controllers\ClassroomsController;
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
    return view('welcome');
});

Route::get('/classrooms', [ClassroomsController::class, 'index'])
    ->name('classroom.index');
Route::get('/classrooms/create', [ClassroomsController::class, 'create'])
    ->name('classroom.create');
Route::get('/classrooms/{classroom}', [ClassroomsController::class, 'show'])
    ->name('classroom.show');
