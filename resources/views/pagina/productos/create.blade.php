@extends('layouts.base')


<h2>crear productos</h2>


<form  action="{{route('productos.store')}}" method="POST" class="row g-3">
    @csrf
    <div class="row g-3">
        <div class="col">
            <label for="inputEmail4" class="form-label">Nombre del Producto</label>
          <input type="text" class="form-control" placeholder="Nombre del Producto" aria-label="First name" id="nombre" name="nombre" value="{{old('nombre')}}">
          {!!$errors->first('nombre','<small>:message</small><br>')!!}
        </div>
    </div>
    <div class="col-md-12">
      <label for="inputEmail4" class="form-label">Descripcion</label>
      <input type="text" class="form-control"  placeholder="Descripcion" id="descripcion" name="descripcion" value="{{old('descripcion')}}">
      {!!$errors->first('descripcion','<small>:message</small><br>')!!}
    </div>
    <div class="col-6">
      <label for="inputEmail4" class="form-label">existencia</label>
      <input type="text" class="form-control" placeholder="Existencia" id="excistencia" name="existencia" value="{{old('existencia')}}">
      {!!$errors->first('existencia','<small>:message</small><br>')!!}
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Valor Unitario</label>
      <input type="text" class="form-control" placeholder="Valor Unitario" id="valor_und" name="valor_und" value="{{old('valor_und')}}">
      {!!$errors->first('valor_und','<small>:message</small><br>')!!}
    </div>


<div class="col-12">
    <a href="/productos" class="btn btn-info">Cancelar</a>

    <button  type="submit" class="btn btn-primary">Registrar</button>
</div>


    </form>
