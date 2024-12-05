<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa de Empleo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-color: #f8f9fa;
            padding: 60px 0;
            text-align: center;
        }

        .search-form {
            margin-top: 30px;
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    @extends('layout.app')
    @section('tittle', 'menu')
    @section('content')

    <!-- Sección principal con la bienvenida -->
    <div class="hero-section">
        <div class="container">
            <h1 class="display-4">Bienvenido a la Bolsa de Empleo</h1>
            <p class="lead">Encuentra las mejores ofertas de empleo en Centroamérica.</p>
            <p>Comienza tu búsqueda y encuentra el trabajo perfecto para ti.</p>
        </div>
    </div>

    <!-- Formulario de búsqueda de empleo -->
    <div class="container search-form">
        <h2>Busca tu empleo ideal</h2>
        <form action="#" method="GET">
            <div class="row">
                <!-- Filtro por cargo, habilidad o compañía -->
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="cargo" class="form-label">Nombre del Cargo / Habilidad / Compañía</label>
                        <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Ej: Desarrollador Web, JavaScript, Tech Solutions">
                    </div>
                </div>

                <!-- Filtro por área o categoría -->
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="area" class="form-label">Área / Categoría</label>
                        <select class="form-select" id="area" name="area" required>
                            <option value="">Seleccione una área</option>
                            <option value="tecnologia">Tecnología</option>
                            <option value="marketing">Marketing</option>
                            <option value="administracion">Administración</option>
                            <option value="ventas">Ventas</option>
                            <option value="finanzas">Finanzas</option>
                            <option value="diseño">Diseño</option>
                            <option value="salud">Salud</option>
                            <option value="ingenieria">Ingeniería</option>
                            <!-- Añadir más áreas según lo necesario -->
                        </select>
                    </div>
                </div>

                <!-- Filtro por país (desplegable con países de Centroamérica) -->
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="pais" class="form-label">País</label>
                        <select class="form-select" id="pais" name="pais" required>
                            <option value="">Seleccione un país</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Panamá">Panamá</option>
                            <option value="Belice">Belice</option>
                            <option value="República Dominicana">República Dominicana</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Botón para enviar la búsqueda -->
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>

    <!-- Sección de empresas destacadas -->
    <div class="container mt-5">
        <h2>Empresas destacadas</h2>
        <div class="row">
            <!-- Empresa 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Empresa 1">
                    <div class="card-body">
                        <h5 class="card-title">Tech Solutions</h5>
                        <p class="card-text">Una empresa líder en desarrollo de software y soluciones tecnológicas.</p>
                        <a href="#" class="btn btn-primary">Ver ofertas</a>
                    </div>
                </div>
            </div>

            <!-- Empresa 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Empresa 2">
                    <div class="card-body">
                        <h5 class="card-title">Innovatech</h5>
                        <p class="card-text">Innovación en IA y automatización de procesos.</p>
                        <a href="#" class="btn btn-primary">Ver ofertas</a>
                    </div>
                </div>
            </div>

            <!-- Empresa 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Empresa 3">
                    <div class="card-body">
                        <h5 class="card-title">Green Energy Corp</h5>
                        <p class="card-text">Especialistas en energías renovables y soluciones sostenibles.</p>
                        <a href="#" class="btn btn-primary">Ver ofertas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <div class="footer">
        <p>© 2024 Bolsa de Empleo - Todos los derechos reservados</p>
        <a href="{{ route('empleos.showempleo') }}" class="btn btn-light">Ver todas las ofertas</a>
    </div>
    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
