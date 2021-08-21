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
Route:: apiResource("roles", "RolesController");
Route:: apiResource("permisos", "PermisosController");
Route:: apiResource("rolesHasPermiso", "RolesHasPermisosController");
Route:: apiResource("usuariosHasRol", "UsuarioshasRolesController");
Route:: get('usuariosHasRol/{nombreUsuario}/{password}', 'UsuariosHasRolesController@getUsuarioHasRol');
Route:: get('rolesHasPermiso/a/{idPermiso}', 'RolesHasPermisosController@getPermisos');
Route:: post('usuarios/a/create', 'UsuariosController@store');
