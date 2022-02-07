@extends('layouts.app')

@section('content')


<div style="padding: 40px;">

  <h2>crear clientes</h2>


  <form action="{{route('clientes.store')}}" method="POST" class="row g-3">
    @csrf
    <div class="row g-3">
      <div class="col">
        <label for="inputEmail4" class="form-label">Nombre Completo</label>
        <input type="text" class="form-control" placeholder="Nombre Completo" aria-label="First name" id="nombre" name="nombre" value="{{old('nombre')}}">
        {!!$errors->first('nombre','<small>:message</small><br>')!!}
      </div>
    </div>
    <div class="col-md-12">
      <label for="inputEmail4" class="form-label">Tipo de Documento</label>
      <input type="text" class="form-control" placeholder="Documento" id="documento" name="documento" value="{{old('documento')}}">
      {!!$errors->first('documento','<small>:message</small><br>')!!}
    </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Numero de Documento</label>
      <input type="text" class="form-control" placeholder="Numero de Documento" id="num_documento" name="num_documento" value="{{old('num_documento')}}">
      {!!$errors->first('num_documento','<small>:message</small><br>')!!}
    </div>
    <div class="col-6">
      <label for="inputEmail4" class="form-label">Direccion</label>
      <input type="text" class="form-control" placeholder="Direccion" id="direcccion" name="direccion" value="{{old('direccion')}}">
      {!!$errors->first('direccion','<small>:message</small><br>')!!}
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Celular</label>
      <input type="text" class="form-control" placeholder="Celular" id="celular" name="celular" value="{{old('celular')}}">
      {!!$errors->first('celular','<small>:message</small><br>')!!}
    </div>


    <div class="col-12">
      <a href="/clientes" class="btn btn-info">Cancelar</a>

      <button type="submit" class="btn btn-primary">Registrar</button>
    </div>


  </form>
</div>

@endsection