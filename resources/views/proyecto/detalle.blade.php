@extends('../layout/app')
@section('titulo','Inicio')

@section('sidebar')
    @parent
@stop    

@section('contenido')

<div class="panel-body">
 
  @if(Session::has('message'))
    <div class="alert alert-primary" role="alert">
      {{ Session::get('message') }}
    </div>
  @endif 
           
    <p class="h5">Nombre:</p>
    <p class="h6 mb-3">{{ $proyectos->nombreProyecto }}</p>

    <p class="h5">Fuente de Fondos:</p>
    <p class="h6 mb-3">{{ $proyectos->fuenteFondos }}</p>

    <p class="h5">Monto Planificado:</p>
    <p class="h6 mb-3">{{ $proyectos->montoPlanificado }}</p> 

    <p class="h5">Monto Patrocinado:</p>
    <p class="h6 mb-3">{{ $proyectos->montoPatrocinado }}</p> 
    
    <p class="h5">Monto Fondos Propios:</p>
    <p class="h6 mb-3">{{ $proyectos->montoFondosPropios }}</p> 
    
</div>

@endsection