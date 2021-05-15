<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TiendaController;


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

//Auth::routes();
// route::resource('productos','ProductoController');
// route::resource('tiendas','\App\Http\Controllers\TiendaController');
// route::resource('proveedores','ProveedorController');
// route::resource('pedidosProductos','PedidoProductoController');
// route::resource('pedidos','PedidoController');

Route::group(['prefix'=>'/','middleware'=>'cors'], function(){
    route::resource('productos','\App\Http\Controllers\ProductoController');
    route::resource('tiendas','\App\Http\Controllers\TiendaController');
    route::resource('proveedores','\App\Http\Controllers\ProveedorController');
    route::resource('pedidosProductos','\App\Http\Controllers\PedidoProductoController');
    route::resource('pedidos','\App\Http\Controllers\PedidoController');
});
