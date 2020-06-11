<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap 3 --}}
    
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/principal_3.css')}}">

    {{--  css dinamico  --}}
    {{--  <link id="css" rel="stylesheet" >
    <script type="text/javascript">
        var url = "{{asset('/')}}";
        document.getElementById('css').href = url+"css/principal_3.css";

    </script>  --}}
    
    <title>principal</title>
    
    {{--  <script src="{{asset('js/resolucion.js')}}" type="text/javascript"></script>  --}}
</head>

<body>
    {{--  nuevo  --}}
    <div class="container-fluid">
        <div class="row top-navbar">
            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 logo">Imagen del Logo</div>
            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 menu_horizontal">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 hamburger">
                        <ul>
                            <li class=""><label class="menu_ocultar"> <span class="glyphicon glyphicon-menu-hamburger"> </span></label></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11">
                        <div class="row">
                            <div class="col-xs-7 col-sm-9 col-md-9 col-lg-9 titulo"><p>descripcion de algunas cosas</p></div>
                            <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 usuario">
                                <ul>
                                    <li>
                                        <a href="#" ><i class="fas fa-user-circle"></i><label class="nombre">omar lazo</label></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  col-xl-3 col-xs-offset-2 col-sm-offset-9 col-md-offset-9 col-lg-offset-9 col-xl-offset-9  --}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  submenu">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 icono">
                        <i class="fas fa-user-circle"></i>
                        <p>omar lazo</p>
                    </div>
                </div>
                <div class="row botones">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 perfil"> <a href="" class="btn btn-default">perfil</a></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 session"> <a href="" class="btn btn-default">cerrar sesion</a></div>
                </div>
            </div>
        </div>
        {{--  <div class="row contenido_secundario">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 menu_vertical">

                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 informacion">

                    </div>
                </div>
            </div>
        </div>  --}}
    </div>
    <div class="container-fluid contenido_secundario">
        <div class="row">
            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 menu_vertical">
                <div class="menu_vertical_menu">
                    <div class="encabezado_menu_vertical">
                        <div class="icono_usuario_vertical">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="logo_vertical">
                            <p>omar lazo</p> 
                        </div>
                        
                    </div>
                    <div class="menu_navegador">
                        <div class="letra">
                            <p>menu navegador</p>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="">
                                <span class="icono_vertical"><i class="far fa-list-alt"></i></span>
                                <span class="descripcion_vertical">Organigrama Personal</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="icono_vertical"><i class="far fa-list-alt"></i></span>
                                <span class="descripcion_vertical">Venta</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="icono_vertical"><i class="far fa-list-alt"></i></span>
                                <span class="descripcion_vertical">Inventario</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="icono_vertical"><i class="far fa-list-alt"></i></span>
                                <span class="descripcion_vertical">menu 3</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="icono_vertical"><i class="far fa-list-alt"></i></span>
                                <span class="descripcion_vertical">menu 4</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="icono_vertical"><i class="far fa-list-alt"></i></span>
                                <span class="descripcion_vertical">menu 5</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 contenedor_principal">
                <div class="header_cont_ppal">encabezado</div>
                <div class="informacion_cont_ppal">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos voluptatem dolore odio porro fugiat tempore modi debitis vero quidem deserunt quasi praesentium, dolor earum sed itaque ea consequuntur inventore commodi.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos voluptatem dolore odio porro fugiat tempore modi debitis vero quidem deserunt quasi praesentium, dolor earum sed itaque ea consequuntur inventore commodi.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos voluptatem dolore odio porro fugiat tempore modi debitis vero quidem deserunt quasi praesentium, dolor earum sed itaque ea consequuntur inventore commodi.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos voluptatem dolore odio porro fugiat tempore modi debitis vero quidem deserunt quasi praesentium, dolor earum sed itaque ea consequuntur inventore commodi.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos voluptatem dolore odio porro fugiat tempore modi debitis vero quidem deserunt quasi praesentium, dolor earum sed itaque ea consequuntur inventore commodi.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos voluptatem dolore odio porro fugiat tempore modi debitis vero quidem deserunt quasi praesentium, dolor earum sed itaque ea consequuntur inventore commodi.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos voluptatem dolore odio porro fugiat tempore modi debitis vero quidem deserunt quasi praesentium, dolor earum sed itaque ea consequuntur inventore commodi.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos voluptatem dolore odio porro fugiat tempore modi debitis vero quidem deserunt quasi praesentium, dolor earum sed itaque ea consequuntur inventore commodi.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos voluptatem dolore odio porro fugiat tempore modi debitis vero quidem deserunt quasi praesentium, dolor earum sed itaque ea consequuntur inventore commodi.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos voluptatem dolore odio porro fugiat tempore modi debitis vero quidem deserunt quasi praesentium, dolor earum sed itaque ea consequuntur inventore commodi.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos voluptatem dolore odio porro fugiat tempore modi debitis vero quidem deserunt quasi praesentium, dolor earum sed itaque ea consequuntur inventore commodi.
                </div>             
            </div>
        </div>
    </div>
    


    {{-- Bootstrap --}}
    <script src="{{asset('js/jquery1.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/principal.js')}}"></script>
</body>
</html>