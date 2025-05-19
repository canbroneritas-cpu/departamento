@extends('layouts.app')

@section('content')
    <h1>Detalles del Empleado</h1>
    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>Nombre:</strong> {{ $empleado->nombre }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $empleado->email }}</li>
        <li class="list-group-item"><strong>DNI:</strong> {{ $empleado->dni }}</li>
        <li class="list-group-item"><strong>Departamento:</strong> {{ $empleado->departamento->nombre }}</li>
    </ul>
    <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Volver</a>
@endsection
