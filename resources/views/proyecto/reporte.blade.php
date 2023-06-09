<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto - Reporte</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="card body">
            
        <h1 class="display-8 fw-bold">Proyectos de Gobierno</h1>
        <h3 class="display-10 fw-bold">Fondo Nacional de Vivienda Popular (FONAVIPO)</h3>

        <p><span class="pull-right">Fecha de reporte: </span>{{ $mytime = Carbon\Carbon::now(); }}</p>

        <h6>A continuación listado de proyectos relacionados a la institución en el que se puede apreciar los datos generales de éstos.</h6>
        <table class="table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre de Proyecto</th>
                <th scope="col">Fuente de Fondos</th>
                <th scope="col">$ Planificado</th>
                <th scope="col">$ Patrocinado</th>
                <th scope="col">$ Fondo Propio</th>
                <th scope="col">Creado</th>
            </tr>
            </thead>
            <tbody>
                @foreach($proyectos as $proy)
            <tr>
                <th scope="row">{{$proy->id}}</th>
                <td>{{ $proy->nombreProyecto }}</td>
                <td>{{ $proy->fuenteFontos }}</td>
                <td>{{ $proy->montoPlanificado }}</td>
                <td>{{ $proy->montoPatrocinado }}</td>
                <td>{{ $proy->montoFondosPropios }}</td>
                <td>{{ $proy->fecha_creado }}</td>
            </tr>
            @endforeach 
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>