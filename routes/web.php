<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\RoomController;

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
