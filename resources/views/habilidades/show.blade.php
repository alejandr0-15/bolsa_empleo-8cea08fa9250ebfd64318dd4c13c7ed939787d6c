<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habilidades</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @extends('layout.app')
    @section('title', 'Lista de Habilidades')
    @section('content')

    <div class="container mt-5">
        <h1 class="mb-4">Lista de Habilidades</h1>

        <!-- Botón para crear una nueva habilidad -->
        <a href="{{ route('habilidades.create') }}" class="btn btn-success mb-3">
            Crear Habilidad
        </a>

        <!-- Tabla de habilidades -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Currículum ID</th>
                    <th>Habilidad</th>
                    <th>Nombre del Currículum</th>
                    <th>Acciones</th> <!-- Columna de acciones -->
                </tr>
            </thead>
            <tbody>
                @foreach ($habilidades as $habilidad)
                    <tr>
                        <td>{{ $habilidad->id }}</td>
                        <td>{{ $habilidad->idcurriculo }}</td>
                        <td>{{ $habilidad->habilidades }}</td>
                        <td>{{ $habilidad->curriculo ? $habilidad->curriculo->nombre : 'No asignado' }}</td>
                        <td>
                            <!-- Contenedor con flexbox para los botones -->
                            <div class="d-flex gap-2">
                                <!-- Botón para editar -->
                                <a href="{{ route('habilidades.edit', $habilidad->id) }}" class="btn btn-warning">Editar</a>

                                <!-- Formulario para eliminar -->
                                <form action="{{ route('habilidades.destroy', $habilidad->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE') <!-- Se indica que es un método DELETE -->
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar esta habilidad?')">Eliminar</button>
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
