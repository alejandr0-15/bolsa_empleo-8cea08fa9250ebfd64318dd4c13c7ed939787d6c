
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @extends('layout.app')
@section('tittle', 'menu')
@section('content')

    <div class="container mt-5">
        <h1 class="mb-4">Lista de Empleos</h1>

        <!-- Botón para crear una nueva oferta de trabajo -->
        <a href="{{ route('empleo.create') }}" class="btn btn-success mb-3">
            Crear Oferta de Trabajo
        </a>

        <!-- Tabla de empleos -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Salario</th>
                    <th>Requisitos</th>
                    <th>Empresa</th>
                    <th>Acciones</th> <!-- Columna de acciones -->
                </tr>
            </thead>
            <tbody>
                @foreach ($empleos as $empleo)
                    <tr>
                        <td>{{ $empleo->id }}</td>
                        <td>{{ $empleo->titulo }}</td>
                        <td>{{ $empleo->descripcion }}</td>
                        <td>{{ $empleo->salario }}</td>
                        <td>{{ $empleo->requisitos }}</td>
                        <td>{{ $empleo->empresa->nombre_empresa }}</td> <!-- Relación con la empresa -->
                        <td>
                            <!-- Contenedor con flexbox para los botones -->
                            <div class="d-flex gap-2">
                                <!-- Botón para editar -->
                                <a href="{{ route('empleo.edit', $empleo->id) }}" class="btn btn-warning">Editar</a>

                                <!-- Formulario para eliminar -->
                                <form action="{{ route('empleo.destroy', $empleo->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE') <!-- Se indica que es un método DELETE -->
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar esta oferta?')">Eliminar</button>
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
