@extends('layouts.app')

@section('content')
    <h1>Crear Empleado</h1>
    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf

        @include('empleados.partials.form', ['empleado' => new App\Models\Empleado])

        <button class="btn btn-success mt-2">Guardar</button>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary mt-2">Cancelar</a>
    </form>
@endsection
