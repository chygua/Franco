@extends('layouts.base')


<h2>editar clientes</h2>


<form  action="{{route('clientes.update',$cliente)}}" method="POST" class="row g-3">
    @csrf
    @method('PUT')
    <div class="row g-3">
        <div class="col">
            <label for="inputEmail4" class="form-label">Nombre Completo</label>
          <input type="text" class="form-control" placeholder="Nombre Completo" aria-label="First name" id="nombre" name="nombre" value="{{$cliente->nombre}}">
          {!!$errors->first('nombre','<small>:message</small><br>')!!}
        </div>
    </div>
    <div class="col-md-12">
      <label for="inputEmail4" class="form-label">Tipo de Documento</label>
      <input type="text" class="form-control"  placeholder="Documento" id="documento" name="documento" value="{{$cliente->documento}}">
      {!!$errors->first('documento','<small>:message</small><br>')!!}
    </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Numero de Documento</label>
      <input type="text" class="form-control" placeholder="Numero de Documento" id="num_documento" name="num_documento" value="{{$cliente->num_documento}}">
      {!!$errors->first('num_documento','<small>:message</small><br>')!!}
    </div>
    <div class="col-6">
      <label for="inputEmail4" class="form-label">Direccion</label>
      <input type="text" class="form-control" placeholder="Direccion" id="direcccion" name="direccion" value="{{$cliente->direccion}}">
      {!!$errors->first('direccion','<small>:message</small><br>')!!}
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Celular</label>
      <input type="text" class="form-control" placeholder="Celular" id="celular" name="celular" value="{{$cliente->celular}}">
      {!!$errors->first('celular','<small>:message</small><br>')!!}
    </div>


<div class="col-12">
    <a href="/clientes" class="btn btn-info">Cancelar</a>

    <button  type="submit" class="btn btn-primary">guardar</button>
</div>


    </form>
