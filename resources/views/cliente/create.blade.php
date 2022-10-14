@extends('adminlte::page')

@section('title', 'Registrar Cliente')

@section('content_header')
    <div class="alert alert-primary" role="alert">
        <h1 class="text-center">Registro Clientes</h1>
</div>
@stop

@section('content')
<form action="{{route('clientes.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="codigo" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input id="descripcion" name="apellido" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input id="precio" name="correo" type="email" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Numero de telefono</label>
        <input id="precio" name="telefono" type="number" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Codigo postal</label>
        <input id="precio" name="cp" type="number" class="form-control" tabindex="4">
    </div>
    <a href="/clientes" class="btn btn-secundary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button> 
    
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop