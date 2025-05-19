<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $empleado->nombre) }}">
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $empleado->email) }}">
</div>

<div class="mb-3">
    <label for="dni" class="form-label">DNI</label>
    <input type="text" name="dni" class="form-control" value="{{ old('dni', $empleado->dni) }}">
</div>

<div class="mb-3">
    <label for="departamento_id" class="form-label">Departamento</label>
    <select name="departamento_id" class="form-select">
        @foreach($departamentos as $departamento)
            <option value="{{ $departamento->id }}" {{ old('departamento_id', $empleado->departamento_id) == $departamento->id ? 'selected' : '' }}>
                {{ $departamento->nombre }}
            </option>
        @endforeach
    </select>
</div>
