<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', 'LoginController@login')->name('login');

Route::post('/appVinosAdmin/login', 'loginController@logeado')->name('validacion');

Route::get('/appVinosAdmin', 'loginController@validado')->name('appVinosAdmin');

Route::get('/listaProductos', 'ProductController@index')->name('listaProductos');

Route::get('/codeImprime', 'ProductController@barCode')->name('codeImprime');

Route::get('/ventaAdministrador', 'ProductController@ventaAdmin')->name('ventaAdministrador');

Route::post('/user/registroNuevo', 'UserController@registroNuevo')->name('user.nuevo');

Route::post('user/editador', 'UserController@editador')->name('editado');

Route::post('user/state', 'UserController@estado' )->name('state');

Route::post('/listaProductos', 'ProductController@create')->name('product.create');

Route::post('Edit/product', 'ProductController@edit')->name('edit.product');

Route::post('product/elimina', 'ProductController@destroy')->name('product.elimina');

Route::get('auth/register', 'HomeController@registro')->name('register');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('api/productos/busqueda', 'ProductController@busqueda')->name('api.productos');

Route::post('decuenta/stock', 'ProductController@descuenta')->name('descuenta.stock');

Route::get('orden/nueva', 'OrderController@store')->name('order.new');

Route::put('venta/guardada', 'ProductController@venta')->name('venta.guardada');