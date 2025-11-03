<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark mb-3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('alumnos.index') }}">Sistema Escolar</a>
        </div>
    </nav>

    @yield('content')
</body>
</html>
