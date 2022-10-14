@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <div class="alert alert-success text-center" role="alert">
        <h1 class="text-center">Lista de Clientes</h1>
    </div>
    
@stop

@section('content')


<a href="{{route('clientes.create')}}" class="btn btn-success mb-3">Registrar Cliente</a>
<table id="clientes" class="table table-dark table-striped mt-4">

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Correo</th>
            <th scope="col">Telefono</th>
            <th scope="col">CP</th>
            <th scope="col">Acciones</th> 
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $clientes)
            <tr>
                <td>{{$clientes->id}}</td>
                <td>{{$clientes->Nombre}}</td>
                <td>{{$clientes->Apellido}}</td>
                <td>{{$clientes->Correo}}</td>
                <td>{{$clientes->Telefono}}</td>
                <td>{{$clientes->CP}}</td>
                <td>
                    
                    <form action="{{route('clientes.destroy', $clientes->id)}}" method="POST">
                        <a href="{{route('clientes.edit', $clientes->id)}}" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                        
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    
@stop

@section('js')
    <script src="    https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://kit.fontawesome.com/5c5549850f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
   
    <script>
        $(document).ready(function () {
            $('#clientes').DataTable({
                "lengthMenu":[[5,10,50,-1], [5,10,50, "All"]],
                "language": {
                    "lengthMenu": "Ver _MENU_ resultados",
                    "zeroRecords": "Nothing found - sorry",
                    "info": " Pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    "search": "Buscar",
                    "paginate":{
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                
                
            });
            
            
        });
    </script>
@stop
