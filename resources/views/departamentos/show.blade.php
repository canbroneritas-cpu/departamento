@extends('layouts.app')

@section('content')
    <h1>Detalles del Departamento</h1>
    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>Nombre:</strong> {{ $departamento->nombre }}</li>
        <li class="list-group-item"><strong>Ubicación:</strong> {{ $departamento->ubicacion }}</li>
    </ul>
    <a href="{{ route('departamentos.index') }}" class="btn btn-secondary">Volver</a>
@endsection
