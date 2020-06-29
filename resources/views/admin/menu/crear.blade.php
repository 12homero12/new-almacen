@extends('esquema.layout')
@section('titulo')
    Sistema Menu
@endsection

@section('styles')
    <link rel="stylesheet" href="{{asset('css/formulario_general.css')}}">
@endsection

@section('contenido')
<div class="tabla_encabezado">
    <h3>crear menu</h3>
</div>
<hr class="tabla_linea">
@include('include.mensaje')
@include('include.form_error')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formulario_menu">
    <form action="{{route('menu_guardar')}}" id="form_general" class="form-horizontal" role="form" method="POST">  
        @csrf
        @include('admin.menu.form')
        @include('include.boton_form_crear')
    </form>
</div>
@endsection
{{-- lista de 
    <datalist id="lista">
      
        <option value="Perro">
      
        <option value="Gato">
      
        <option value="Conejo">
      
        <option value="Loro">
      
      </datalist> --}}

