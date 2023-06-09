@extends('../layout/app')
@section('titulo','Inicio')

@section('sidebar')
    @parent
@stop    

@section('contenido')


 
  @if(Session::has('message'))
    <div class="alert alert-primary" role="alert">
      {{ Session::get('message') }}
    </div>
  @endif 

  
   
    <div class="card-body">
 
      <ul class="list-unstyled mt-3 mb-3">  
      <li class="">Nombre: <span class="pull-right">{{ $proyectos->nombreProyecto }}</span></li>   
      <li class="">Fuente de Fondos: <span class="pull-right">{{ $proyectos->fuenteFondos }}</span></li>   
      <li class="">Monto Planificado: <span class="pull-right">{{ $proyectos->montoPlanificado }}</span></li>   
      <li class="">Monto Patrocinado: <span class="pull-right">{{ $proyectos->montoPatrocinado }}</span></li>   
      <li class="">Monto Fondos Propios: <span class="pull-right">{{ $proyectos->montoFondosPropios }}</span></li>   
    </ul>
</div>


@endsection
