@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <div class="alert alert-primary" role="alert">
        <h1 class="text-center">Editar Venta</h1>
    </div>
@stop

@section('content')
<form action="{{route('ventas.update', $venta->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <select name="cliente" class="form-control">
            <option value="">Seleccione el cliente</option>
            @foreach ($clientes as $cliente)
                <option value="{{$cliente->id}}">{{$cliente->Nombre}}</option>
            @endforeach
        </select>
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Monto</label>
        <input id="monto" name="monto" type="money" class="form-control" value="{{$venta->monto}}">
    </div>
    

    <a href="/ventas" class="btn btn-secundary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

