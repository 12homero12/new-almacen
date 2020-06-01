<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap 3 --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/principal.css')}}">
    
    <title>principal</title>
</head>

<body>
    {{-- Encabezado --}}
    {{-- <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

        </div>
    </div> --}}
    <div class="container">
        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-vertical" aria-expanded="false">
                        {{-- <button type="button" class="navbar-toggle collapsed" data-target="#menu" data-toggle="collapse"> --}}
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="img/logoo.jpg" alt="" height="30px"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav">
                            {{--  <li class="activa"><a href="" class="nav-link menu_ocultar"><span class="glyphicon glyphicon-menu-hamburger"></span></a></li>  --}}
                            <li class="activa"><label class="menu_ocultar"><span class="glyphicon glyphicon-menu-hamburger"></span></label></li>
                            {{-- <li class="nav-item active"><a href="#" class="nav-link">post1</a></li>
                            <li class="nav-item active"><a href="#" class="nav-link">post1</a></li> --}}
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    {{-- contenido --}}
    <div class="container-fluid contenido">
        {{-- menu vertical --}}
        <div class=" menu_vertical" id="">
            {{--  <h2>menu</h2>  --}}
            <ul class="">
                <li class="activa"><a href=""><span class="glyphicon glyphicon-home"></span>menu 1</a></li>
                <li><a href=""><span class="glyphicon glyphicon-th-list"></span>menu 2</a></li>
                <li><a href=""><span class="glyphicon glyphicon-th-list"></span>menu 3</a></li>
                <li><a href=""><span class="glyphicon glyphicon-th-list"></span>menu 4</a></li>
                <li><a href=""><span class="glyphicon glyphicon-th-list"></span>menu 5</a></li>
                <li><a href=""><span class="glyphicon glyphicon-th-list"></span>menu 6</a></li>
            </ul>
            <div class="redes_sociales">
                <a href=""><i class="fab fa-facebook-square"></i></a>
                <a href=""><i class="fab fa-twitter-square"></i></a>
                <a href=""><i class="fab fa-instagram-square"></i></a>
            </div>
        </div>
        {{-- contenedor principal --}}
        <div class="contenedor_principal">
            <div class="header_cont_ppal">Nombre del contenido</div>
            <div class="informacion_cont_ppal">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut sit saepe ullam ex commodi et molestiae labore in magnam consequuntur, itaque at! Architecto molestiae ad fugit quas nobis tempore
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil a voluptatem tempora exercitationem odio, error, expedita distinctio, aliquam quo voluptates temporibus illum quod autem repudiandae nobis quidem facere consequuntur?</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil a voluptatem tempora exercitationem odio, error, expedita distinctio, aliquam quo voluptates temporibus illum quod autem repudiandae nobis quidem facere consequuntur?</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil a voluptatem tempora exercitationem odio, error, expedita distinctio, aliquam quo voluptates temporibus illum quod autem repudiandae nobis quidem facere consequuntur?</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil a voluptatem tempora exercitationem odio, error, expedita distinctio, aliquam quo voluptates temporibus illum quod autem repudiandae nobis quidem facere consequuntur?</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil a voluptatem tempora exercitationem odio, error, expedita distinctio, aliquam quo voluptates temporibus illum quod autem repudiandae nobis quidem facere consequuntur?</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil a voluptatem tempora exercitationem odio, error, expedita distinctio, aliquam quo voluptates temporibus illum quod autem repudiandae nobis quidem facere consequuntur?</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil a voluptatem tempora exercitationem odio, error, expedita distinctio, aliquam quo voluptates temporibus illum quod autem repudiandae nobis quidem facere consequuntur?</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil a voluptatem tempora exercitationem odio, error, expedita distinctio, aliquam quo voluptates temporibus illum quod autem repudiandae nobis quidem facere consequuntur?</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil a voluptatem tempora exercitationem odio, error, expedita distinctio, aliquam quo voluptates temporibus illum quod autem repudiandae nobis quidem facere consequuntur?</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil a voluptatem tempora exercitationem odio, error, expedita distinctio, aliquam quo voluptates temporibus illum quod autem repudiandae nobis quidem facere consequuntur?</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil a voluptatem tempora exercitationem odio, error, expedita distinctio, aliquam quo voluptates temporibus illum quod autem repudiandae nobis quidem facere consequuntur?</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil a voluptatem tempora exercitationem odio, error, expedita distinctio, aliquam quo voluptates temporibus illum quod autem repudiandae nobis quidem facere consequuntur?</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil a voluptatem tempora exercitationem odio, error, expedita distinctio, aliquam quo voluptates temporibus illum quod autem repudiandae nobis quidem facere consequuntur?</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil a voluptatem tempora exercitationem odio, error, expedita distinctio, aliquam quo voluptates temporibus illum quod autem repudiandae nobis quidem facere consequuntur?</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil a voluptatem tempora exercitationem odio, error, expedita distinctio, aliquam quo voluptates temporibus illum quod autem repudiandae nobis quidem facere consequuntur?</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil a voluptatem tempora exercitationem odio, error, expedita distinctio, aliquam quo voluptates temporibus illum quod autem repudiandae nobis quidem facere consequuntur?</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil a voluptatem tempora exercitationem odio, error, expedita distinctio, aliquam quo voluptates temporibus illum quod autem repudiandae nobis quidem facere consequuntur?</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil a voluptatem tempora exercitationem odio, error, expedita distinctio, aliquam quo voluptates temporibus illum quod autem repudiandae nobis quidem facere consequuntur?</div>
                 
            </div>
        </div>
    </div>


    
    {{-- Bootstrap --}}
    <script src="{{asset('js/jquery1.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/principal.js')}}"></script>
</body>
</html>