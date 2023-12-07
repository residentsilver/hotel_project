<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/guest', 'GuestController@index');

Route::get('/guest', [GuestController::class, 'index']); //利用者の一覧表示。コントローラーのindexメソッド呼び出し・実行

Route::get('/guest/add', [GuestController::class, 'add']); //追加機能
Route::post('/guest/add', [GuestController::class, 'create']); //追加機能
Route::post('/guest/add', [GuestController::class, 'post']); //バリデーション処理(コントローラーのpostメソッド呼び出し・実行)

Route::get('/guest/edit', [GuestController::class, 'edit']);//更新ページに遷移した後の表示
Route::post('/guest/update', [GuestController::class, 'update']);//更新
Route::post('/guest/update', [GuestController::class, 'post']); //バリデーション処理(コントローラーのpostメソッド呼び出し・実行)

Route::delete('/guest/{guest}', [GuestController::class, 'delete']);//削除

Route::get('/masters',[MasterController::class, 'masters_index'])->middleware(['auth']);
Route::post('/masters',[MasterController::class, 'masters_index']);

require __DIR__.'/auth.php';
Route::get('/guest', [GuestController::class, 'index']); //利用者の一覧表示。コントローラーのindexメソッド呼び出し・実行
Route::post('/guest', [GuestController::class, 'post']); //バリデーション処理(コントローラーのpostメソッド呼び出し・実行)