<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/create', [UserController::class, 'create'])->name('create');
Route::get('/index', [UserController::class, 'index'])->name('index');
Route::get('/show', [UserController::class, 'show'])->name('show');
Route::post('/store', [UserController::class, 'store'])->name('store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('empleados',App\Http\Controllers\empleadoController::class)->middleware('auth');
