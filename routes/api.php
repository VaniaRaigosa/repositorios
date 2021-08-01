<?php

use App\Http\Controllers\categoriaController;
use App\Http\Controllers\clienteController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\carritoController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ventaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*INICIAR SESIÓN*/ 
Route::post('/login',[loginController::class,'sesion']);

/*CATEGORIAS*/ 
Route::post('/lista_categorias',[categoriaController::class,'listar_categorias'])->middleware('auth:api');
Route::post('/guarda_categorias',[categoriaController::class,'guardar_categorias'])->middleware('auth:api');
Route::post('/elimina_categorias',[categoriaController::class,'eliminar_categorias'])->middleware('auth:api');

/*CLIENTES*/ 
Route::post('/lista_clientes',[clienteController::class,'listar_clientes'])->middleware('auth:api');
Route::post('/guardar_clientes',[clienteController::class,'guarda_clientes'])->middleware('auth:api');
Route::post('/elimina_clientes',[clienteController::class,'eliminar_clientes'])->middleware('auth:api');

/*PRODUCTOS*/ 
Route::post('/lista_productos',[productoController::class,'listar_productos'])->middleware('auth:api');
Route::post('/guardar_productos',[productoController::class,'guarda_productos'])->middleware('auth:api');
Route::post('/eliminar_productos',[productoController::class,'elimina_productos'])->middleware('auth:api');

/*CARRITO*/ 
Route::post('/guardar_opciones',[carritoController::class,'guarda_carrito'])->middleware('auth:api');
Route::post('/lista_opciones',[carritoController::class,'listar_carrito'])->middleware('auth:api');
Route::post('/eliminar_opciones',[carritoController::class,'elimina_carrito'])->middleware('auth:api');

/*VENTAS*/ 
Route::post('/guardar_venta',[ventaController::class,'guarda_venta'])->middleware('auth:api');

/*CERRAR SESIÓN*/ 
Route::post('/logout',[loginController::class,'cerrar'])->middleware('auth:api');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
