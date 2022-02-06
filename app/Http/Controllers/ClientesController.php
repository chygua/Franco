<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();
        return view('pagina.clientes.clientes')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pagina.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'documento'=>'required  ',
            'num_documento'=>'required ',
            'direccion'=>'required',
            'celular'=>'required',
        ]);

        $clientes = new Clientes();
        $clientes->nombre=$request->nombre;
        $clientes->documento=$request->documento;
        $clientes->num_documento=$request->num_documento;
        $clientes->direccion=$request->direccion;
        $clientes->celular=$request->celular;


        $clientes->save();
        return redirect('/clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Clientes::find($id);
        return view('pagina.clientes.editar')->with('cliente',$cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientes $cliente)
    {
        $cliente->nombre=$request->nombre;
        $cliente->documento=$request->documento;
        $cliente->num_documento=$request->num_documento;
        $cliente->direccion=$request->direccion;
        $cliente->celular=$request->celular;

        $cliente->save();
        return redirect('/clientes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientes $cliente)
    {
        $cliente->delete();
        return redirect('/clientes');
    }
}
