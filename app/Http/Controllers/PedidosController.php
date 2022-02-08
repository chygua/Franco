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
        return view('pagina.pedidos.pedidos')->with('pedidos', $pedidos);
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
            'cliente_id' => 'required',
            'num_articulos' => 'required',
            'codigo_articulo' => 'required',
            'nom_articulo' => 'required ',
            'sub_total' => 'required',
            'iva' => 'required',
            'valor_total' => 'required',
        ]);

        $pedidos = new pedidos();
        $pedidos->cliente_id = $request->cliente_id;
        $pedidos->num_articulos = $request->num_articulos;
        $pedidos->codigo_articulo = $request->codigo_articulo;
        $pedidos->nom_articulo = $request->nom_articulo;
        $pedidos->sub_total = $request->sub_total;
        $pedidos->iva = $request->iva;
        $pedidos->valor_total = $request->valor_total;


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
        $pedidos = Pedidos::find($id);
        return view('pagina.pedidos.editar')->with('pedidos', $pedidos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedidos $pedido)
    {
        $pedido->cliente_id=$request->cliente_id;
        $pedido->num_articulos=$request->num_articulos;
        $pedido->codigo_articulo=$request->codigo_articulo;
        $pedido->nom_articulo=$request->nom_articulo;
        $pedido->sub_total=$request->sub_total;
        $pedido->iva=$request->iva;
        $pedido->valor_total=$request->valor_total;

        $pedido->save();
        return redirect('/pedidos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedidos $pedido)
    {
        $pedido->delete();
        return redirect('/pedidos');
    }
}
