<?php

namespace App\Http\Controllers;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use Illuminate\Http\Request;
use DateTime;

use App\Models\Proyectos;



class ProyectosController extends Controller
{
    public function listar()
    {
        $proyectos = Proyectos::all();
        return view('proyecto.listar', compact('proyecto')); 
        
    }

     
// Crear un Registro (Create) 
public function crear()
{
    $proyectos= Proyectos::all();
    return view('proyecto.crear', compact('proyectos'));
}


 
// Proceso de Creación de un Registro 
public function store(ItemCreateRequest $request)
{
    // Instancio al modelo proyectos que hace llamado a la tabla 'proyectos' de la Base de Datos
    $proyectos = new Proyectos; 
 
    // Recibo todos los datos del formulario de la vista 'crear.blade.php'
    $proyectos->nombreProyecto = $request->nombreProyecto;
    $proyectos->fuenteFondos = $request->fuenteFondos;
    $proyectos->montoPlanificado = $request->montoPlanificado;
    $proyectos->montoPatrocinado = $request->montoPatrocinado;
    $proyectos->montoFondosPropios = $request->montoFondosPropios;
    $proyectos->fecha_creado = (new DateTime)->getTimestamp(); 

 
    // Inserto todos los datos en mi tabla 'proyectos' 
    $proyectos->save();
 
    // Hago una redirección a la vista principal con un mensaje 
    return redirect('proyectos/listar')->with('message','Guardado Satisfactoriamente !'); 
}


// Leer Registro por 'id' (Read) 
public function detalle($id)
{
    $proyectos = Proyectos::find($id);
    return view('proyecto.detalle', compact('proyectos')); 
}

//  Actualizar un registro (Update)
public function actualizar($id)
{
    $proyectos = Proyectos::find($id);
    return view('proyecto.actualizar',['proyectos'=>$proyectos]);
}
 
// Proceso de Actualización de un Registro (Update)
public function update(ItemUpdateRequest $request, $id)
{        
    // Recibo todos los datos desde el formulario Actualizar
    $proyectos = Proyectos::find($id);
    $proyectos->nombreProyecto = $request->nombreProyecto;
    $proyectos->fuenteFondos = $request->fuenteFondos;
    $proyectos->montoPlanificado = $request->montoPlanificado;
    $proyectos->montoPatrocinado = $request->montoPatrocinado;
    $proyectos->montoFondosPropios = $request->montoFondosPropios;
    $proyectos->fecha_modificado = (new DateTime)->getTimestamp(); 
    
    $proyectos->save();
 
    // Muestro un mensaje y redirecciono a la vista principal 
    return redirect('proyectos/listar')->with('message','Editado Satisfactoriamente !'); 

}
 
// Eliminar un Registro 
public function eliminar($id)
{
    // Indicamos el 'id' del registro que se va Eliminar
    $proyectos = Proyectos::find($id);
 
    
    Proyectos::destroy($id); 
 
    // Opcional: Si deseas guardar la fecha de eliminación de un registro, debes mantenerlo en 
    // una tabla llamada por ejemplo 'proyectos_eliminados' y alli guardas su fecha de eliminación 
    // $proyectos->deleted_at = (new DateTime)->getTimestamp();
        
    // Muestro un mensaje y redirecciono a la vista principal 
    return redirect('proyectos/listar')->with('message','Eliminado Satisfactoriamente !'); 
}

public function index()
{
    $proyectos = Proyectos::all();
    return view('proyecto.listar', compact('proyectos')); 
}
public function reporte()
{
    $proyectos = Proyectos::all();
    return view('proyecto.reporte', compact('proyectos')); 
}



}
