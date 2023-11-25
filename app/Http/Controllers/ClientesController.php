<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $clientes=Clientes::all();
        return view('clientes.index',compact('clientes'));
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
        $clientes=new Clientes;
       
        $clientes->Nombre=$request->input('Nombre');
        $clientes->Direccion=$request->input('Direccion');
        $clientes->Telefono=$request->input('Telefono');
        $clientes->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Clientes $clientes)
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
        $clientes=Clientes::find($ID);
        $clientes->Nombre=$request->input('Nombre');
        $clientes->Direccion=$request->input('Direccion');
        $clientes->Telefono=$request->input('Telefono');
      
        $clientes->save();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($ID)
    {
        $clientes=Clientes::find($ID);
      
        $clientes->delete();
        return redirect()->back();
        //
    }
}
