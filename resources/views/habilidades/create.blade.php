<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Habilidad</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @extends('layout.app') <!-- Hereda el layout base -->

    @section('title', 'Crear Habilidad') <!-- Título de la página -->

    @section('content') <!-- Contenido de la página -->
    <div class="container mt-5">
        <h1 class="mb-4">Crear Nueva Habilidad</h1>

        <!-- Formulario para crear una habilidad -->
        <form action="{{ route('habilidades.store') }}" method="POST">
            @csrf

            <!-- Campo para seleccionar el currículum -->
            <div class="mb-3">
                <label for="idcurriculo" class="form-label">Seleccionar Currículum</label>
                <select class="form-control" id="idcurriculo" name="idcurriculo" required>
                    <option value="">Seleccione un Currículum</option>
                    @foreach ($curriculums as $curriculum)
                        <option value="{{ $curriculum->id }}">{{ $curriculum->nombre }}</option>
                    @endforeach
                </select>
                @error('idcurriculo')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Campo para la habilidad -->
            <div class="mb-3">
                <label for="habilidades" class="form-label">Habilidad</label>
                <input type="text" class="form-control" id="habilidades" name="habilidades" value="{{ old('habilidades') }}" required>
                @error('habilidades')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Botón para guardar -->
            <button type="submit" class="btn btn-success">Guardar Habilidad</button>
            <a href="{{ route('habilidades.index') }}" class="btn btn-secondary ml-3">Cancelar</a>
        </form>
    </div>

    @endsection <!-- Fin del contenido -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
