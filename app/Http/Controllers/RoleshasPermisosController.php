<?php

namespace App\Http\Controllers;

use App\RoleshasPermisos;
use Illuminate\Http\Request;

class RoleshasPermisosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles_has_permiso = RoleshasPermisos::all();
        return $roles_has_permiso;
    }

    public function getPermisos($idRol){
        if(RoleshasPermisos::where('idRol', "1")->exists()){
            $roles_has_permiso = RoleshasPermisos::where('idRol', "1")->get()->toJson(JSON_PRETTY_PRINT);
            return response($roles_has_permiso);
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
        $rol_has_permiso = RoleshasPermisos::create($request->all());
        return $rol_has_permiso;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RoleshasPermisos  $roleshasPermisos
     * @return \Illuminate\Http\Response
     */
    public function show(RoleshasPermisos $roleshasPermisos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RoleshasPermisos  $roleshasPermisos
     * @return \Illuminate\Http\Response
     */
    public function edit(RoleshasPermisos $roleshasPermisos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RoleshasPermisos  $roleshasPermisos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoleshasPermisos $roleshasPermisos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RoleshasPermisos  $roleshasPermisos
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoleshasPermisos $roleshasPermisos)
    {
        //
    }
}
