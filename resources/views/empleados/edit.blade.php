@extends('layouts.app')

@section('content')
    <h1>Editar Empleado</h1>
    <form action="{{ route('empleados.update', $empleado) }}" method="POST">
        @csrf
        @method('PUT')

        @include('empleados.partials.form', ['empleado' => $empleado])

        <button class="btn btn-primary mt-2">Actualizar</button>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary mt-2">Cancelar</a>
    </form>
@endsection
