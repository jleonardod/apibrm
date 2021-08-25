<?php

use Illuminate\Http\Request;

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

Route:: apiResource("usuarios", "UsuariosController");
Route:: apiResource("productos", "ProductosController");
Route:: apiResource("roles", "RolesController");
Route:: apiResource("permisos", "PermisosController");
Route:: apiResource("rolesHasPermiso", "RolesHasPermisosController");
Route:: apiResource("usuariosHasRol", "UsuarioshasRolesController");
Route:: get('usuariosHasRol/{nombreUsuario}/{password}', 'UsuariosHasRolesController@getUsuarioHasRol');
Route:: get('rolesHasPermiso/a/{idPermiso}', 'RolesHasPermisosController@getPermisos');
Route:: post('usuarios/a/create', 'UsuariosController@store');
Route:: post('productos/a/create', 'ProductosController@store');
Route:: post('usuariosHasRol/a/create', 'UsuarioshasRolesController@store');
Route:: delete('usuarios/{id}/delete', 'UsuariosController@borrado');
Route:: delete('productos/{id}/delete', 'ProductosController@borrado');
Route:: get('usuarios/consultarUsuario/{id}', 'UsuariosController@getUsuario');
Route:: get('productos/consultarProducto/{id}', 'ProductosController@getProducto');
Route:: put('productos/{id}/actualiza', 'ProductosController@actualizaProducto');
