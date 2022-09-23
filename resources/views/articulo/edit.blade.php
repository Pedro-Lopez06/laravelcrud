@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <div class="alert alert-primary" role="alert">
        <h1 class="text-center">Editar Articulos</h1>
    </div>
@stop

@section('content')
<form action="{{route('articulos.update', $articulo->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1" value="{{$articulo->codigo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$articulo->description}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="numbre" class="form-control" tabindex="3" value="{{$articulo->cantidad}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="numbre" class="form-control" tabindex="4" value="{{$articulo->precio}}">
    </div>
    <a href="/articulos" class="btn btn-secundary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

