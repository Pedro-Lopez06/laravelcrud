@extends('adminlte::page')

@section('title', 'Registro')

@section('content_header')
    <div class="alert alert-primary text-center" role="alert">
        <h1 class="text-center">Lista de Productos</h1>
    </div>
    
@stop

@section('content')


<a href="{{route('articulos.create')}}" class="btn btn-primary mb-3">Registrar producto</a>
<table id="articulos" class="table table-dark table-striped mt-4">

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th> 
        </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
            <tr>
                <td>{{$articulo->id}}</td>
                <td>{{$articulo->codigo}}</td>
                <td>{{$articulo->description}}</td>
                <td>{{$articulo->cantidad}}</td>
                <td>{{$articulo->precio}}</td>
                <td>
                    
                    <form action="{{route('articulos.destroy', $articulo->id)}}" method="POST">
                        <a href="{{route('articulos.edit', $articulo->id)}}" class="btn btn-info">Editar</a>
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
            $('#articulos').DataTable({
                "lengthMenu":[[5,10,50,-1], [5,10,50, "All"]],
                "language": {
                    "lengthMenu": "Ver _MENU_ resultados",
                    "zeroRecords": "Nothing found - sorry",
                    "info": " Pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtered from _MAX_ total records)",
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

 
