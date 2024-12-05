<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Aplicación</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Crear Aplicación</h1>

    <!-- Formulario para crear una aplicación -->
    <form action="{{ route('aplicaciones.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="idempleo" class="form-label">Empleo</label>
            <select id="idempleo" name="idempleo" class="form-control" required>
                <option value="">Seleccione un empleo</option>
                @foreach($empleos as $empleo)
                    <option value="{{ $empleo->id }}">{{ $empleo->titulo }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="idcurriculum" class="form-label">Curriculum</label>
            <select id="idcurriculum" name="idcurriculum" class="form-control" required>
                <option value="">Seleccione un curriculum</option>
                @foreach($curriculums as $curriculum)
                    <option value="{{ $curriculum->id }}">{{ $curriculum->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" id="fecha" name="fecha" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Crear Aplicación</button>
    </form>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
