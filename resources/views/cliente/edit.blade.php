@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <div class="alert alert-primary" role="alert">
        <h1 class="text-center">Editar Clientes</h1>
    </div>
@stop

@section('content')
<form action="{{route('clientes.update', $clientes->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$clientes->Nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input id="apellido" name="apellido" type="text" class="form-control" tabindex="2" value="{{$clientes->Apellido}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input id="correo" name="correo" type="text" class="form-control" tabindex="2" value="{{$clientes->Correo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input id="telefono" name="telefono" type="numbre" class="form-control" tabindex="3" value="{{$clientes->Telefono}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">CP</label>
        <input id="cp" name="cp" type="numbre" class="form-control" tabindex="4" value="{{$clientes->CP}}">
    </div>
    <a href="/clientes" class="btn btn-secundary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

