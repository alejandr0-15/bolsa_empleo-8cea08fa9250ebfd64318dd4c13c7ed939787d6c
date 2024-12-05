<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Aquí irá el título de cada página --}}
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
</head>
<body>
    {{-- Menú con la única opción de "Empleos" --}}
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Inventario</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Opción de Empleos -->
                    <li class="nav-item">
                        <a class="nav-link" href="/empleo/showempleo">Empleos</a>
                    </li>
                    <!-- Opción de Habilidades -->
                    <li class="nav-item">
                        <a class="nav-link" href="/habilidades">Habilidades</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Contenido de la página --}}
    <div class="container-fluid">
        @yield('content') 
    </div> 
</body>
</html>
