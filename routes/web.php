<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;

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


Route::get('/masters',[MasterController::class, 'masters_index']);
Route::post('/masters',[MasterController::class, 'masters_index']);

Route::get('/rooms',[RoomController::class, 'rooms_index']);
Route::post('/rooms',[RoomController::class, 'rooms_index']);