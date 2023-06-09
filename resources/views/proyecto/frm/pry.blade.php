


 <div class="col-md-12 ">
@if ( !empty ( $proyectos->id) )
<br />
        <div class="row">
            <label for="nombre" class="negrita">Nombre:</label> 
            <div class="col-sm-7">
                <input class="form-control" placeholder="Ingrese el nombre asignado al proyecto" required="required" name="nombreProyecto" type="text" id="nombreProyecto" value="{{ $proyectos->nombreProyecto }}"> 
            </br>
        </div>
        
        <div class=" row">
            <label for="precio" class="negrita">Fuente de Fondos:</label> 
            <div class="col-sm-7">
                <input class="form-control" placeholder="Ingrese la fuente de fondos" required="required" name="fuenteFondos" type="text" id="fuenteFondos" value="{{ $proyectos->fuenteFondos}}"> 
            </div>
        </div>
        
        <div class=" row">
            <label for="stock" class="negrita">Monto Planificado</label> 
            <div class="col-sm-7">
                <input class="form-control" placeholder="50000" required="required" name="montoPlanificado" type="text" id="montoPlanificado" value="{{ $proyectos->montoPlanificado }}"> 
            </div>
        </div>
        
        <div class=" row">
            <label for="img" class="negrita">Monto Patrocinado</label> 
             <div class="col-sm-7">
                <input class="form-control" placeholder="50000" required="required" name="montoPatrocinado" type="text" id="montoPatrocinado" value="{{ $proyectos->montoPatrocinado }}"> 
            </div>

        <div>
        <div class=" row">
            <label for="img" class="negrita">Monto Fondos Propios</label> 
            <div class="col-sm-7">
                <input class="form-control" placeholder="50000" required="required" name="montoFondosPropios" type="text" id="montoFondosPropios" value="{{ $proyectos->montoFondosPropios }}"> 
                </div>   
        <div>
            <br />
@else
<br />
        <div class=" row">
            <label for="nombre" class="negrita">Nombre:</label> 
            <div class="col-sm-7">
                <input class="form-control" placeholder="Ingrese el nombre asignado al proyecto" required="required" name="nombreProyecto" type="text" id="nombreProyecto" value=""> 
            </div>
        </div>
        
        <div class=" row">
            <label for="precio" class="negrita">Fuente de Fondos:</label> 
            <div class="col-sm-7">
                <input class="form-control" placeholder="Ingrese la fuente de fondos" required="required" name="fuenteFondos" type="text" id="fuenteFondos" value=""> 
            </div>
        </div>
        
        <div class=" row">
            <label for="stock" class="negrita">Monto Planificado</label> 
            <div class="col-sm-7"> 
                <input class="form-control" placeholder="50000" required="required" name="montoPlanificado" type="text" id="montoPlanificado" value=""> 
            </div>
        </div>
        
        <div class=" row">
            <label for="img" class="negrita">Monto Patrocinado</label> 
            <div class="col-sm-7">
                <input class="form-control" placeholder="50000" required="required" name="montoPatrocinado" type="text" id="montoPatrocinado" value=""> 
            </div>
        </div>

       
        <div class=" row">
            <label for="img" class="negrita">Monto Fondos Propios</label> 
            <div class="col-sm-7">
                <input class="form-control" placeholder="50000" required="required" name="montoFondosPropios" type="text" id="montoFondosPropios" value=""> 
                </div>   
            </div>  
            <br />
            @endif
          

                
                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="{{ route('proyectos/listar') }}" class="btn btn-warning">Cancelar</a>
            <br /><br />

             </div>   
