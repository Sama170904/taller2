<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Solicitud - SamaPage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container text-center">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('solicitud.index') }}">SamaPage</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('solicitud.index') }}">Home</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search" action="#" method="GET">
                            <input class="form-control me-2" type="search" placeholder="Search" />
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('solicitud.index') }}">Listado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('solicitud.create') }}">Crear Solicitud</a>
                </li>
            </ul>
        </div>

        <div class="col-9 text-start">
            <h1 class="display-4 mb-4">Agregar Solicitud</h1>

            <form action="{{ route('solicitud.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="tema" class="form-label">Tema</label>
                    <input type="text" class="form-control" id="tema" name="tema" required>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="area" class="form-label">Área</label>
                    <select class="form-select" id="area" name="area" required>
                        <option value="">Seleccione un área</option>
                        <option value="TI">TI</option>
                        <option value="Cont">Cont</option>
                        <option value="Adm">Adm</option>
                        <option value="Operat">Operat</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="fecha_registro" class="form-label">Fecha de Registro</label>
                    <input type="date" class="form-control" id="fecha_registro" name="fecha_registro" required>
                </div>

                <div class="mb-3">
                    <label for="fecha_cierre" class="form-label">Fecha de Cierre</label>
                    <input type="date" class="form-control" id="fecha_cierre" name="fecha_cierre" required>
                </div>

                <div class="mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <select class="form-select" id="estado" name="estado" required>
                        <option value="">Seleccione un estado</option>
                        <option value="Solicitud">Solicitud</option>
                        <option value="Aprobado">Aprobado</option>
                        <option value="Rechazado">Rechazado</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="observacion" class="form-label">Observación</label>
                    <textarea class="form-control" id="observacion" name="observacion" rows="2"></textarea>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="1" id="usuarioExt" name="usuarioExt">
                    <label class="form-check-label" for="usuarioExt">Usuario Externo</label>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="reset" class="btn btn-secondary">Limpiar</button>
            </form>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <p class="lead">Derechos de Copyright de Rolando Samaniego</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

