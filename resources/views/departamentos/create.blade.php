@extends('layouts.app')

@section('content')
    <h1>Crear Departamento</h1>
    <form action="{{ route('departamentos.store') }}" method="POST">
        @csrf

        @include('departamentos.partials.form', ['departamento' => new App\Models\Departamento])

        <button class="btn btn-success mt-2">Guardar</button>
        <a href="{{ route('departamentos.index') }}" class="btn btn-secondary mt-2">Cancelar</a>
    </form>
@endsection
