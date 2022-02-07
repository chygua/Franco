@extends('layouts.app')

@section('content')


<div style="padding: 40px;">
    <h1>productos</h1>

    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a href="productos/create" class="btn btn-info">CREAR</a>
        </li>
    </ul>

    <table class="table color table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">existencia</th>
                <th scope="col">valor unitario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id}}</td>
                <td>{{ $producto->nombre}}</td>
                <td>{{ $producto->descripcion}}</td>
                <td>{{ $producto->existencia}}</td>
                <td>{{ $producto->valor_und}}</td>
                <td>
                    <a href="{{ route('productos.edit', $producto) }}">
                        <button type="button" class="btn btn-warning btn-sm">Editar</button></a>

                    <form action="{{ route('productos.destroy', $producto) }}" class="d-inline" method="POST">
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