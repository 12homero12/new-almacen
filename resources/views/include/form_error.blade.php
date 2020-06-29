@if ($errors->any())
    <div class="alert alert-danger alert-dismissable mensaje">
        <span class="icono_mensaje"><i class="fas fa-ban"></i></span>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>El formulario tiene errores.</strong> 
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>    
@endif
