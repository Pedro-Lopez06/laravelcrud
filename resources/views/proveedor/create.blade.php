@extends('adminlte::page')

@section('title', 'Registrar Pproveedor')

@section('content_header')
    <div class="alert alert-primary" role="alert">
        <h1 class="text-center">Registro Proveedores</h1>
</div>
@stop

@section('content')
<form action="{{route('proveedores.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Numero de telefono</label>
        <input id="telefono" name="telefono" type="number" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input id="correo" name="correo" type="email" class="form-control" tabindex="4">
    </div>
    <a href="/articulos" class="btn btn-secundary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button> 
    
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop