<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    use HasFactory;
    
    const CREATED_AT = 'fecha_creado';
    const UPDATED_AT = 'fecha_modificado';
    // Instancio la tabla 'productos' 
    protected $table = 'proyectos';
    
    // Declaro los campos que usaré de la tabla 'productos' 
    protected $fillable = ['nombreProyecto', 'fuenteFondos', 'montoPlanificado', 'montoPatrocinado','montoFondosPropios','fecha_creado','fecha_modificado']; 
}
