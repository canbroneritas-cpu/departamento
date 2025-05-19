@extends('layouts.app')

@section('content')
    <h1>Editar Departamento</h1>
    <form action="{{ route('departamentos.update', $departamento) }}" method="POST">
        @csrf
        @method('PUT')

        @include('departamentos.partials.form', ['departamento' => $departamento])

        <button class="btn btn-primary mt-2">Actualizar</button>
        <a href="{{ route('departamentos.index') }}" class="btn btn-secondary mt-2">Cancelar</a>
    </form>
@endsection
