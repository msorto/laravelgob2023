<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto - @yield('titulo')</title>

    @vite(['resources/js/app.js'])

</head>
<body>
  @section('sidebar')
  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Proyecto</span>
      </a>
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Inicio</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="true">Mantenimiento</a>
          <ul class="dropdown-menu " aria-labelledby="dropdown09" data-bs-popper="none">
            <li><a class="dropdown-item" href="#">Proyecto</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="true">Procesos</a>
          <ul class="dropdown-menu " aria-labelledby="dropdown09" data-bs-popper="none">
            <li><a class="dropdown-item" href="#">Asignación de fondos</a></li>
            <li><a class="dropdown-item" href="#">Reasignar fondos</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="true">Reportes</a>
          <ul class="dropdown-menu " aria-labelledby="dropdown09" data-bs-popper="none">
            <li><a class="dropdown-item" href="#">Listado de proyectos</a></li>
          </ul>
        </li>
      </ul>
    </header>
  </div>
  @show

  <div class="container">
    @yield('contenido')       
  </div>
</body>
</html>