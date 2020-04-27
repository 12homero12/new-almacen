<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap 3 --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    {{-- css inicio --}}
    <link rel="stylesheet" href="{{asset('css/inicio.css')}}">
    <title>Document</title>
</head>
<body>
    {{-- Encabezado --}}
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <h1>Imagen</h1>
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                    <h1>Contenido</h1>
                </div>
            </div>
        </div>
    </header>
    {{-- contenido --}}
    <div class="container">

    </div>
    
    {{-- Bootstrap --}}
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrtap.min.js')}}"></script>

</body>
</html>