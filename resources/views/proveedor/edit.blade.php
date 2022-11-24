@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <div class="alert alert-primary" role="alert">
        <h1 class="text-center">Editar Proveedor</h1>
    </div>
@stop

@section('content')
<form action="{{route('proveedores.update', $proveedores->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$proveedores->nombre}}">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input id="telefono" name="telefono" type="numbre" class="form-control" tabindex="3" value="{{$proveedores->telefono}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input id="correo" name="correo" type="text" class="form-control" tabindex="2" value="{{$proveedores->correo}}">
    </div>

    <a href="/proveedores" class="btn btn-secundary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

