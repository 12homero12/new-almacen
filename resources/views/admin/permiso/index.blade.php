@extends('esquema.layout')
@section('titulo')
    Permisos
@endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('css/tabla-general.css')}}">
@endsection
@section('contenido')
<div class="tabla_encabezado">
    <h3>permisos</h3>
    
</div>
<hr class="tabla_linea">
<div class="table-responsive">
    @include('esquema.buscador_tabla')
    <table id="tabla_order" class="table table-striped table-hover table-bordered tabla_general">
        <thead>
            <tr>
                <th style="width: 5%">Nro</th>
                <th>Nombre</th>
                <th>Slug</th>
                <th>Estado</th>
                <th style="width: 15%;" class="botones_tabla"></th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($permisos as $permiso)               
                <tr>
                    <td>{{$permiso->id}}</td>
                    <td>{{$permiso->nombre}}</td>
                    <td>{{$permiso->slug}}</td>                      
                    @if ($permiso->estado==1)
                        <td>habilitado</td>
                    @else
                        <td>inhabilitado</td>
                    @endif  
                    <td>
                        <button type="button" class="btn btn-primary btn-xs">Moodificar</button>
                        <button type="button" class="btn btn-danger btn-xs">Eliminar</button>

                    </td>        
                </tr>
            @endforeach
        </tbody>
        
    </table>
    <div class="paginacion_tabla">
        {!! $permisos->render() !!}
    </div>
</div>
    
@endsection
@section('scripts')
<script>
    $(function(){
  $('#tabla_order').tablesorter(); 
});
</script>

@endsection
