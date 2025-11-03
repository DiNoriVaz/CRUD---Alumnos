@extends('alumnos.base')

@section('content')
<div class="container">
    <h1>Editar Alumno</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('alumnos.update', $alumno) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="codigo">Código:</label>
            <input type="text" name="codigo" class="form-control" value="{{ old('codigo', $alumno->codigo) }}">
        </div>

        <div class="mb-3">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $alumno->nombre) }}">
        </div>

        <div class="mb-3">
            <label for="correo">Correo:</label>
            <input type="email" name="correo" class="form-control" value="{{ old('correo', $alumno->correo) }}">
        </div>

        <div class="mb-3">
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento', $alumno->fecha_nacimiento) }}">
        </div>

        <div class="mb-3">
            <label for="sexo">Sexo:</label>
            <select name="sexo" class="form-control">
                <option value="M" {{ $alumno->sexo == 'M' ? 'selected' : '' }}>Masculino</option>
                <option value="F" {{ $alumno->sexo == 'F' ? 'selected' : '' }}>Femenino</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="carrera">Carrera:</label>
            <input type="text" name="carrera" class="form-control" value="{{ old('carrera', $alumno->carrera) }}">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
