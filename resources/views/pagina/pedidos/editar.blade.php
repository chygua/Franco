@extends('layouts.app')

@section('content')

<div style="padding: 40px;">

  <h2>editar Pedidos</h2>


  <form action="{{route('pedidos.update',$pedidos)}}" method="POST" class="row g-3">
    @csrf
    @method('PUT')
    <div class="col-md-12">
      <label for="inputEmail4" class="form-label">Numero de Articulos</label>
      <input type="text" class="form-control" placeholder="Numero de Articulos" id="num_articulos" name="num_articulos" value="{{$pedidos->num_articulos}}">
      {!!$errors->first('num_articulos','<small>:message</small><br>')!!}
    </div>
    <div class="col-md-12">
      <label for="inputEmail4" class="form-label">ID Cliente</label>
      <input type="text" class="form-control" placeholder="ID Cliente" id="cliente_id" name="cliente_id" value="{{$pedidos->cliente_id}}">
      {!!$errors->first('cliente_id','<small>:message</small><br>')!!}
    </div>
    <div class="col-md-12">
      <label for="inputEmail4" class="form-label">Codigo de Articulo</label>
      <input type="text" class="form-control" placeholder="Codigo de Articulo" id="codigo_articulo" name="codigo_articulo" value="{{$pedidos->codigo_articulo}}">
      {!!$errors->first('codigo_articulo','<small>:message</small><br>')!!}
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Nombre de Articulo</label>
      <input type="text" class="form-control" placeholder="Nombre de Articulo" id="nom_articulo" name="nom_articulo" value="{{$pedidos->nom_articulo}}">
      {!!$errors->first('nom_articulo','<small>:message</small><br>')!!}
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">sub Total</label>
      <input type="text" class="form-control" placeholder="sub Total" id="sub_total" name="sub_total" value="{{$pedidos->sub_total}}">
      {!!$errors->first('sub_total','<small>:message</small><br>')!!}
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Iva</label>
      <input type="text" class="form-control" placeholder="Iva" id="iva" name="iva" value="{{$pedidos->iva}}">
      {!!$errors->first('iva','<small>:message</small><br>')!!}
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Valor Total</label>
      <input type="text" class="form-control" placeholder="Valor Total" id="valor_total" name="valor_total" value="{{$pedidos->valor_total}}">
      {!!$errors->first('valor_total','<small>:message</small><br>')!!}
    </div>


    <div class="col-12">
      <a href="/pedidos" class="btn btn-info">Cancelar</a>

      <button type="submit" class="btn btn-primary">guardar</button>
    </div>


  </form>
</div>

@endsection