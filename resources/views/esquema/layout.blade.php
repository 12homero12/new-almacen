<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- titulo --}}
        <title>@yield('titulo','Inventario')| Sistemas HomeroSIS</title>
        {{-- bootstrap 3 --}}
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
        {{-- css principal --}}
        <link rel="stylesheet" href="{{asset('css/principal_3.css')}}">
        {{-- css dinamico --}}
        @yield('styles')
        
    </head>
    <body>
        {{--  header  --}}
        @include('esquema.header')
        {{-- header fin --}}
        <div class="container-fluid contenido_secundario_primario">
            <div class="row contenido_secundario">
                {{-- menu vertical --}}
                @include('esquema.aside')
                {{-- menu vertical fin --}}
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 contenedor_principal">
                    {{-- <div class="header_cont_ppal">encabezado</div> --}}
                    <div class="informacion_cont_ppal">
                        @yield('contenido')
                    </div>             
                </div>
            </div>
        </div>
        {{-- footer --}}
        @include('esquema.footer')
        {{-- footer fin --}}
        {{-- Bootstrap --}}
        <script src="{{asset('js/jquery1.js')}}"></script>
        <script src="{{asset('js/jquery.tablesorter.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/principal.js')}}"></script>
        {{-- js dinamico --}}
        @yield('scripts')
    </body>
</html>