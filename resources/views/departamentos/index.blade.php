@extends('layouts.app')

@section('content')
    <h1>Departamentos</h1>
    <a href="{{ route('departamentos.create') }}" class="btn btn-primary mb-3">Nuevo Departamento</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departamentos as $departamento)
                <tr>
                    <td>{{ $departamento->nombre }}</td>
                    <td>{{ $departamento->ubicacion }}</td>
                    <td>
                        <a href="{{ route('departamentos.show', $departamento) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('departamentos.edit', $departamento) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('departamentos.destroy', $departamento) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Eliminar este departamento?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
