<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminRegisterController;

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
    return view('layouts.toppage');
});

Route::get('/top', function () {
    return view('layouts.toppage');
});


// Route::get('/guest', 'GuestController@index');

Route::middleware(['auth'])->group(function () {
    Route::get('/guest', [GuestController::class, 'index']); //利用者の一覧表示。コントローラーのindexメソッド呼び出し・実行
}); 


Route::get('/guest/add', [GuestController::class, 'add']); //追加機能
Route::post('/guest/add', [GuestController::class, 'create']); //追加機能
// Route::post('/guest/add', [GuestController::class, 'post']); //バリデーション処理(コントローラーのpostメソッド呼び出し・実行)

Route::get('/guest/edit', [GuestController::class, 'edit']);//更新ページに遷移した後の表示
Route::post('/guest/update', [GuestController::class, 'update']);//更新
// Route::post('/guest/update', [GuestController::class, 'post']); //バリデーション処理(コントローラーのpostメソッド呼び出し・実行)

Route::delete('/guest/{guest}', [GuestController::class, 'delete']);//削除

Route::get('/guest/restore', [GuestController::class, 'get']);//削除
Route::post('/guest/restore', [GuestController::class, 'restore']);//削除


Route::get('/masters',[MasterController::class, 'masters_index'])->middleware(['auth']); //mastersログイン時表示
Route::post('/masters',[MasterController::class, 'masters_index']);

Route::get('/rooms',[RoomController::class, 'rooms_index'])->middleware(['auth']);//rooms表示
Route::post('/rooms',[RoomController::class, 'rooms_index']);

Route::get('/room/find',[RoomController::class, 'find']);
Route::post('/room/find',[RoomController::class, 'search']);

Route::get('/reservation/index',[ReservationController::class, 'index'])->middleware(['auth']);
Route::post('/reservation/index',[ReservationController::class, 'index']);
Route::get('/reservation/add',[ReservationController::class, 'add']);
Route::post('/reservation/add',[ReservationController::class, 'create']);

Route::middleware(['auth'])->group(function () {
    Route::get('/guest', [GuestController::class, 'index']); //利用者の一覧表示。コントローラーのindexメソッド呼び出し・実行
}); 



Route::post('/guest', [GuestController::class, 'post']); //バリデーション処理(コントローラーのpostメソッド呼び出し・実行)


/*
|--------------------------------------------------------------------------
| 利用者用ルーティング
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function () {
    // 登録
    Route::get('register', [AdminRegisterController::class, 'create'])
        ->name('admin.register');

    Route::post('register', [AdminRegisterController::class, 'store']);

    // ログイン
    Route::get('login', [AdminLoginController::class, 'showLoginPage'])
        ->name('admin.login');

    Route::post('login', [AdminLoginController::class, 'login']);

    // 以下の中は認証必須のエンドポイントとなる
    Route::middleware(['auth:admin'])->group(function () {
        // ダッシュボード
        Route::get('dashboard', fn() => view('admin.dashboard'))
            ->name('admin.dashboard');
    });
});

/*
|--------------------------------------------------------------------------
| 管理者用ルーティング
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';