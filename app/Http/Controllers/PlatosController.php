<?php

namespace App\Http\Controllers;

use App\Models\Platos;
use App\Models\Restaurante;
use Illuminate\Http\Request;

class PlatosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $platos=Platos::all();
        $restaurantes=Restaurante::all();
        return view('plato.index',compact('platos','restaurantes'));
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
        $platos=new Platos;
       
        $platos->Nombre=$request->input('Nombre');
        $platos->Precio=$request->input('Precio');
        $platos->Stock=$request->input('Stock');
        $platos->Id_restaurante=$request->input('Id_restaurante');
        $platos->Imagen=$request->input('Imagen');
        $platos->save();
        return redirect()->back();

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Platos $plato)
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
        $platos=Platos::find($ID);
        $platos->Nombre=$request->input('Nombre');
        $platos->Precio=$request->input('Precio');
        $platos->Stock=$request->input('Stock');
        $platos->Id_restaurante=$request->input('Id_restaurante');
        $platos->Imagen=$request->input('Imagen');
        $platos->save();
        return redirect()->back();
  
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($ID)

    {
        $plato=Platos::find($ID);
      
        $plato->delete();
        return redirect()->back();
        //
    }
}
