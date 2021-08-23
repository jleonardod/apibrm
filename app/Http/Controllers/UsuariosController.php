<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuarios::all();
        return $usuarios;
    }

    public function getUsuario($id){
        if(Usuarios::where('id', $id)->exists()){
            $usuario = Usuarios::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($usuario);
        }else{
            return response()->json([
                "message" => "Usuario not found"
            ], 404);
        }
    }

    public function borrado($id){
        if(Usuarios::where('id', $id)->exists()){
            $usuario = Usuarios::find($id);
            $usuario->delete();

            return response()->json([
                "message" => "records delete"
            ], 202);
        }else{
            return response()->json([
                "message" => "Usuario not found"
            ], 404);
        }
    }

    public function actualizaUsuario(Request $request, $id){
        if(Usuarios::where('id', $id)->exists()){
            $usuario = Usuarios::find($id);

            $usuario->update($request->all());

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        }else{
            return response()->json([
                "message" => "Usuario no encontrado"
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
        $usuario = Usuarios::create($request->all());
        return $usuario;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuarios $usuarios)
    {
        //
    }
}
