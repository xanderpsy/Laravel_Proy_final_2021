<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\Devoluciones;
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

//-----------------Ruta para empleados---------------
Route::resource('empleados','EmpleadoController')->middleware('auth');






//--------------Rutas de almacen-----------

//Ruta general
Route::resource('producto','ProductoController');
//Route::get('producto/create',[ProductoController::class,'create'])->name('producto.create');
//Route::get('producto/update/{id}',[ProductoController::class,'update'])->name('producto.update');
//Route::get('producto/show/{id}',[ProductoController::class,'show'])->name('producto.show');
//Route::delete('producto/{id}',[ProductoController::class,'destroy'])->name('producto.destroy');
