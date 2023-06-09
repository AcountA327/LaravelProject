<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kadai01_1Controller;
use App\Http\Controllers\Kadai02_1Controller;
use App\Http\Controllers\Kadai02_2Controller;
use App\Http\Controllers\Kadai03_1Controller;
use App\Http\Controllers\Kadai04_1Controller;
use App\Http\Controllers\Kadai04_2Controller;
use App\Http\Controllers\Kadai05_1Controller;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Kadai09_1Controller;

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


Route::get('/kadai01_1', [Kadai01_1Controller::class, 'index']);
Route::get('/kadai02_1', [Kadai02_1Controller::class, 'index']);
Route::get('/kadai02_2', [Kadai02_2Controller::class, 'index']);
Route::get('/kadai03_1', [Kadai03_1Controller::class, 'index']);
Route::get('/kadai04_1', [Kadai04_1Controller::class, 'index']);
Route::get('/kadai05_1', [Kadai05_1Controller::class, 'index']);
Route::get('/kadai05_3', [Kadai05_1Controller::class, 'photo']);
Route::get('/kadai09_1', [Kadai09_1Controller::class, 'index']);
Route::get('/kadai09_2', [Kadai09_1Controller::class, 'index']);

//post で呼び出された場合は、Controller の post メソッドを実行する。
Route::post('/kadai04_1',[Kadai04_1Controller::class,'post']);
Route::post('/kadai05_1',[Kadai05_1Controller::class,'post']);
Route::resource('kadai06_1', ArticleController::class);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
