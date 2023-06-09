@extends('../layout/app')
@section('titulo','Inicio')

@section('sidebar')
    @parent
@stop    

@section('contenido')
<div class="p-5 mb-4 bg-body-tertiary rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Crear un Proyecto</h1>
      
      <button class="btn btn-primary btn-lg" type="button">Crear</button>
    </div>
  </div>
@endsection