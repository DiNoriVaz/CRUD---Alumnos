@extends('alumnos.base')

@section('content')
<div class="container">
    <h1>Lista de Alumnos</h1>

    <a href="{{ route('alumnos.create') }}" class="btn btn-primary mb-3">+ Nuevo Alumno</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Carrera</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td>{{ $alumno->codigo }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->correo }}</td>
                    <td>{{ $alumno->carrera }}</td>
                    <td>
                        <a href="{{ route('alumnos.show', $alumno) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('alumnos.edit', $alumno) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar alumno?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
