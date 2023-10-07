<?php

namespace App\Http\Controllers;

use App\Models\Restaurante;
use App\Models\Platos;
use Illuminate\Http\Request;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurantes=Restaurante::all();
        return view('restaurante.index',compact('restaurantes'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $restaurantes=new Restaurante;
       
        $restaurantes->Nombre=$request->input('Nombre');
        $restaurantes->Direccion=$request->input('Direccion');
        $restaurantes->Telefono=$request->input('Telefono');
        $restaurantes->Imagen=$request->input('Imagen');
        $restaurantes->save();
        return redirect()->back();
      
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurante $restaurante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($ID)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$ID)
    {
        $restaurantes=Restaurante::find($ID);
        $restaurantes->Nombre=$request->input('Nombre');
        $restaurantes->Direccion=$request->input('Direccion');
        $restaurantes->Telefono=$request->input('Telefono');
        $restaurantes->Imagen=$request->input('Imagen');
      
        $restaurantes->save();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($ID)
    {
        $restaurantes=Restaurante::find($ID);
      
        $restaurantes->delete();
        return redirect()->back();
        //
    }
}
