@extends('layouts.base')
<h1>clientes</h1>

<ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
      <a href="clientes/create" class="btn btn-info">CREAR</a>
    </li>
  </ul>

<table class="table color table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo de Documento</th>
            <th scope="col">Numero de Documento</th>
            <th scope="col">Direccion</th>
            <th scope="col">Celular</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id}}</td>
            <td>{{ $cliente->nombre}}</td>
            <td>{{ $cliente->documento}}</td>
            <td>{{ $cliente->num_documento}}</td>
            <td>{{ $cliente->direccion}}</td>
            <td>{{ $cliente->celular}}</td>
            <td>
                <a href="{{ route('clientes.edit', $cliente) }}">
                    <button type="button"
                    class="btn btn-warning btn-sm">Editar</button></a>

                    <form action="{{ route('clientes.destroy', $cliente) }}" class="d-inline" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
