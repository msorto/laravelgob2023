@extends('../layout/app')
@section('titulo','Inicio')

@section('sidebar')
    @parent
@stop    

@section('contenido')
<div class="card-body">
    <form method="POST" action="{{ route('proyectos/store') }}" role="form" enctype="multipart/form-data">
    
      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
      @include('proyecto.frm.pry')
                                                              
    </form>
  </div>
@endsection