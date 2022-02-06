<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = pedidos::all();
        return view('pagina.pedidos.pedidos')->with('pedidos',$pedidos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pagina.pedidos.create');
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
            'cliente_id'=>'required',
            'num_articulos'=>'required',
            'codigo_articulo'=>'required',
            'nom_articulo'=>'required ',
            'sub_total'=>'required',
            'iva'=>'required',
            'valor_total'=>'required',
        ]);

        $pedidos = new pedidos();
        $pedidos->cliente_id=$request->cliente_id;
        $pedidos->num_articulos=$request->num_articulos;
        $pedidos->codigo_articulo=$request->codigo_articulo;
        $pedidos->nom_articulo=$request->nom_articulo;
        $pedidos->sub_total=$request->sub_total;
        $pedidos->iva=$request->iva;
        $pedidos->valor_total=$request->valor_total;


        $pedidos->save();
        return redirect('/pedidos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function show(Pedidos $pedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Pedidos = Pedidos::find($id);
        return view('pagina.Pedidos.editar')->with('Pedidos',$Pedidos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedidos $pedidos)
    {
        

        $pedidos->num_articulos=$request->descripcion;
        $pedidos->nom_articulo=$request->valor_und;
        $pedidos->sub_total=$request->valor_und;
        $pedidos->iva=$request->valor_und;
        $pedidos->valor_total=$request->valor_und;


        $pedidos->save();
        return redirect('/pedidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedidos $pedidos)
    {
        //
    }
}
