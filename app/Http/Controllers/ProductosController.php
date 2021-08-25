<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Productos::all();
        return $productos;
    }

    public function getProducto($id){
        if(Productos::where('id', $id)->exists()){
            $producto = Productos::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($producto);
        }else{
            return response()->json([
                "message" => "Producto not found"
            ], 404);
        }
    }

    public function borrado($id){
        if(Productos::where('id', $id)->exists()){
            $producto = Productos::find($id);
            $producto->delete();

            return response()->json([
                "message" => "records delete"
            ], 202);
        }else{
            return response()->json([
                "message" => "Producto not found"
            ], 404);
        }
    }

    public function actualizaProducto(Request $request, $id){
        if(Productos::where('id', $id)->exists()){
            $producto = Productos::find($id);

            $producto->update($request->all());

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        }else{
            return response()->json([
                "message" => "Producto no encontrado"
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
        $producto = Productos::create($request->all());
        return $producto;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(Productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $productos)
    {
        //
    }
}
