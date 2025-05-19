<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $departamento->nombre) }}">
</div>

<div class="mb-3">
    <label for="ubicacion" class="form-label">Ubicación</label>
    <input type="text" name="ubicacion" class="form-control" value="{{ old('ubicacion', $departamento->ubicacion) }}">
</div>
