<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReservationController;

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

// Route::get('/guest', 'GuestController@index');

Route::get('/guest', [GuestController::class, 'index']); //利用者管理の一覧表示

Route::get('/masters',[MasterController::class, 'masters_index']);
Route::post('/masters',[MasterController::class, 'masters_index']);

Route::get('/rooms',[RoomController::class, 'rooms_index']);
Route::post('/rooms',[RoomController::class, 'rooms_index']);

Route::get('/reservation/index',[ReservationController::class, 'index']);
Route::post('/reservation/index',[ReservationController::class, 'index']);
Route::get('/reservation/add',[ReservationController::class, 'add']);
Route::post('/reservation/add',[ReservationController::class, 'create']);