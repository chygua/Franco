@extends('layouts.app')

@section('content')

<div style="padding: 40px;">
    <h1>pedidos</h1>

    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a href="pedidos/create" class="btn btn-info">CREAR</a>
        </li>
    </ul>

    <table class="table color table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">cliente id</th>
                <th scope="col">Numero artículos</th>
                <th scope="col">Código artículo</th>
                <th scope="col">Nombre artículo</th>
                <th scope="col">Sub Total</th>
                <th scope="col">Iva</th>
                <th scope="col">Valor Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedidos)
            <tr>
                <td>{{ $pedidos->id}}</td>
                <td>{{ $pedidos->cliente_id}}</td>
                <td>{{ $pedidos->num_articulos}}</td>
                <td>{{ $pedidos->codigo_articulo}}</td>
                <td>{{ $pedidos->nom_articulo}}</td>
                <td>{{ $pedidos->sub_total}}</td>
                <td>{{ $pedidos->iva}}</td>
                <td>{{ $pedidos->valor_total}}</td>
                <td>
                    <a href="{{ route('pedidos.edit', $pedidos) }}">
                        <button type="button" class="btn btn-warning btn-sm">Editar</button></a>

                    <form action="{{ route('pedidos.destroy', $pedidos) }}" class="d-inline" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection