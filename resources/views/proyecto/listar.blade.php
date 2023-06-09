
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

<a href="{{ route('proyectos/crear') }}" class="btn btn-success col-sm-2 mt-3 mb-3">Crear proyecto</a>
<table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre de Proyecto</th>
        <th>Fuente de Fondos</th>
        <th>$ Planificado</th>
        <th>$ Patrocinado</th>
        <th>$ Fondo Propio</th>
        <th>Creado</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody> 
      @foreach($proyectos as $proy) <tr>
        <td class="v-align-middle">{{$proy->id}}</td>
        <td class="v-align-middle">{{$proy->nombreProyecto}}</td>
        <td class="v-align-middle">{{$proy->fuenteFondos}}</td>
        <td class="v-align-middle">{{$proy->montoPlanificado}}</td>
        <td class="v-align-middle">{{$proy->montoPatrocinado}}</td>
        <td class="v-align-middle">{{$proy->montoFondosPropios}}</td>
        <td class="v-align-middle">{{$proy->fecha_creado}}</td>
        <td class="v-align-middle ">
          <form action="{{ route('proyectos/eliminar',$proy->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <a href="{{ route('proyectos/detalles',$proy->id) }}" class="btn btn-dark">Detalles</a>
            <a href="{{ route('proyectos/actualizar',$proy->id) }}" class="btn btn-primary">Editar</a>
            <button type="submit" class="btn btn-danger">Eliminar</button>
          </form>
        </td>
      </tr> 
      @endforeach 
     </tbody>
  </table>

  <script type="text/javascript">
 
    function confirmarEliminar()
    {
    var x = confirm("Estas seguro de Eliminar?");
    if (x)
      return true;
    else
      return false;
    }

</script>

@endsection