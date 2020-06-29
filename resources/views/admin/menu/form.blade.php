<div class="form-group">
    <label for="menu" class="col-lg-offset-1 col-lg-2 control-label requerido">Titulo de Menu:</label>
    <div class="col-lg-6 input-group">
        <span class="input-group-addon"><i class="fas fa-stream"></i></span>
        <input type="text" name="nombre" class="form-control" id="menu" value="{{old('nombre')}}" list="menu" placeholder="Titulo del menu" >
    </div>
    {{-- <small class"form-text text-muted">No ingrese espacios en blanco.</small>     --}}
</div>
<div class="form-group">
    <label for="url" class="col-lg-offset-1 col-lg-2 control-label requerido">Url</label>
    <div class="col-lg-6 input-group">
        <span class="input-group-addon"><i class="fas fa-globe"></i></span>
        <input type="text" name="url" class="form-control" id="url" value="{{old('url')}}" placeholder="Ejemplo: admin/crear" >
    </div>
</div>
<div class="form-group">
    <label for="icono" class="col-lg-offset-1 col-lg-2 control-label">Icono</label>
    <div class="col-lg-6 input-group">
        <span class="input-group-addon"><i class="fas fa-chess-rook"></i></span>
        <input type="text" name="icono" class="form-control" id="icono" value="{{old('icono')}}" placeholder="Icono">  
    </div>
</div>
{{-- ejemplo de lista
    list="lista" --}}

    
