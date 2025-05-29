<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de Solicitudes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
<div class="container text-center">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">SamaPage</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar"/>
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
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
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>

        <div class="col-9">
            <p class="fs-1">Listado de Solicitudes</p>

            <!-- Paso 6: Mostrar mensaje de éxito -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                </div>
            @endif

            <table class="table table-striped align-middle">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tema</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Área</th>
                    <th scope="col">Fecha Registro</th>
                    <th scope="col">Fecha Cierre</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Observación</th>
                    <th scope="col">Usuario Externo</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($solicitudes as $solicitud)
                    <tr>
                        <th scope="row">{{ $solicitud->id }}</th>
                        <td>{{ $solicitud->tema }}</td>
                        <td>{{ $solicitud->descripcion }}</td>
                        <td>{{ $solicitud->area }}</td>
                        <td>{{ $solicitud->fecha_registro }}</td>
                        <td>{{ $solicitud->fecha_cierre }}</td>
                        <td>{{ $solicitud->estado }}</td>
                        <td>{{ $solicitud->observacion }}</td>
                        <td>{{ $solicitud->usuarioExt ? 'Sí' : 'No' }}</td>
                        <td>
                            <!-- Paso 2: Botón Editar -->
                            <a href="{{ route('solicitud.edit', $solicitud->id) }}" class="btn btn-warning btn-sm me-1">Editar</a>

                            <form action="{{ route('solicitud.destroy', $solicitud->id) }}" method="POST" style="display: inline-block;"
                                  onsubmit="return confirm('¿Estás seguro de eliminar esta solicitud?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @if ($solicitudes->isEmpty())
                    <tr>
                        <td colspan="10" class="text-center">No hay solicitudes registradas.</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

    <a href="{{ route('solicitud.create') }}" class="btn btn-success btn-lg shadow-sm rounded-pill d-flex align-items-center mx-auto mt-4" style="width: 180px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-lg me-2" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v6.5H15a.5.5 0 0 1 0 1H8.5v6.5a.5.5 0 0 1-1 0V9.5H1a.5.5 0 0 1 0-1h6.5V1.5A.5.5 0 0 1 8 1z"/>
        </svg>
        Agregar Solicitud
    </a>

    <div class="row">
        <div class="col">
            <p class="lead mt-5">
                Derechos de Copyright de Rolando Samaniego
            </p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>

