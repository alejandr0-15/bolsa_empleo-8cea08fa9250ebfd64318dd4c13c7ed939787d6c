<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicaciones</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @extends('layout.app')
@section('title', 'Aplicaciones')
@section('content')

    <div class="container mt-5">
        <h1 class="mb-4">Lista de Aplicaciones</h1>

        <!-- Botón para crear una nueva aplicación -->
        <a href="{{ route('aplicaciones.create') }}" class="btn btn-success mb-3">
            Crear Aplicación
        </a>

        <!-- Tabla de aplicaciones -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Empleo</th>
                    <th>Curriculum</th>
                    <th>Fecha</th>
                    <th>Acciones</th> <!-- Columna de acciones -->
                </tr>
            </thead>
            <tbody>
                @foreach ($aplicaciones as $aplicacion)
                    <tr>
                        <td>{{ $aplicacion->id }}</td>
                        <td>{{ $aplicacion->empleo->titulo }}</td> <!-- Relación con el empleo -->
                        <td>{{ $aplicacion->curriculum->nombre }}</td> <!-- Relación con el curriculum -->
                        <td>{{ $aplicacion->fecha }}</td>
                        <td>
                            <!-- Contenedor con flexbox para los botones -->
                            <div class="d-flex gap-2">
                                <!-- Botón para editar -->
                                <a href="{{ route('aplicaciones.edit', $aplicacion->id) }}" class="btn btn-warning">Editar</a>

                                <!-- Formulario para eliminar -->
                                <form action="{{ route('aplicaciones.destroy', $aplicacion->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE') <!-- Se indica que es un método DELETE -->
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar esta aplicación?')">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
