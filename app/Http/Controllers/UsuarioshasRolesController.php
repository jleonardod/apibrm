<?php

namespace App\Http\Controllers;

use App\UsuarioshasRoles;
use Illuminate\Http\Request;

class UsuarioshasRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios_has_Rol = UsuarioshasRoles::all();
        return $usuarios_has_Rol;
    }

    public function getUsuarioHasRol($nombreUsuario, $password){
        if((UsuarioshasRoles::where('nombreUsuario', $nombreUsuario)->exists())&&(UsuarioshasRoles::where('password', $password)->exists())){
            $usuario_has_Rol = UsuarioshasRoles::where('nombreUsuario', $nombreUsuario)->get()->toJson(JSON_PRETTY_PRINT);
            return response($usuario_has_Rol);
        }else{
            return response()->json([
                "message" => "Usuario not found"
            ], 404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario_has_Rol = UsuarioshasRoles::create($request->all());
        return $usuario_has_Rol;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UsuarioshasRoles  $usuarioshasRoles
     * @return \Illuminate\Http\Response
     */
    public function show(UsuarioshasRoles $usuarioshasRoles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UsuarioshasRoles  $usuarioshasRoles
     * @return \Illuminate\Http\Response
     */
    public function edit(UsuarioshasRoles $usuarioshasRoles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UsuarioshasRoles  $usuarioshasRoles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsuarioshasRoles $usuarioshasRoles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UsuarioshasRoles  $usuarioshasRoles
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsuarioshasRoles $usuarioshasRoles)
    {
        //
    }
}
