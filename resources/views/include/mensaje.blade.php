@if (session('mensaje'))
    <div class="alert alert-success alert-dismissable mensaje">
        <span class="icono_mensaje"><i class="fas fa-check"></i></span>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Mensaje Sistema</strong> 
        <ul>
                <li>{{ session("mensaje") }}</li>
        </ul>
    </div>    
@endif
