@extends('../layout/app')
@section('titulo','Inicio')

@section('sidebar')
    @parent
@stop    

@section('contenido')
<div class="p-5 mb-4 bg-body-tertiary rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Proyectos de Gobierno</h1>
      <h3 class="display-12 fw-bold">Fondo Nacional de Vivienda Popular (FONAVIPO)</h3>
      <p class="col-md-8 fs-4">Esta web ha sido diseñada para albergar los proyectos de Gobierno, particularmente los que realiza el Fondo Nacional de Vivienda Popular (FONAVIPO), de manera que se pueda listar, agregar, editar y eliminar los proyectos de gobiernos y sus atributos derivados, ha sido preparada por <wdautohl-customtag style="font-weight:bold;color:red;font-size:inherit;display:inline;" id="wdautohl_id_1" class="wdautohl_Ym9vdHN0cmFw">Melvin Sorto</wdautohl-customtag>. como parte de la tarea final del proyecto de formación de ESIT - Laravel - PHP BackEND impartida por el Ing. Edgar Peñate.</p>
      <button class="btn btn-primary btn-lg" type="button">Ver Proyectos</button>
    </div>
  </div>
@endsection