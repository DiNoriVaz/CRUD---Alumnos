@extends('alumnos.base')

@section('content')
<div class="container">
    <h1>Crear Alumno</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="codigo" class="form-label">Código:</label>
            <input type="text" name="codigo" class="form-control" value="{{ old('codigo') }}">
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo:</label>
            <input type="email" name="correo" class="form-control" value="{{ old('correo') }}">
        </div>

        <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento') }}">
        </div>

        <div class="mb-3">
            <label for="sexo" class="form-label">Sexo:</label>
            <select name="sexo" class="form-control">
                <option value="">Selecciona</option>
                <option value="M" {{ old('sexo') == 'M' ? 'selected' : '' }}>Masculino</option>
                <option value="F" {{ old('sexo') == 'F' ? 'selected' : '' }}>Femenino</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="carrera" class="form-label">Carrera:</label>
            <input type="text" name="carrera" class="form-control" value="{{ old('carrera') }}">
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
