<div class="contenedor-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-8 mt-5 mx-2">
            <h1 class="display-5 mb-2">Empleado</h1>
                <div id="accordianId" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="cliente">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordianId" href="#cliente_contenido" aria-expanded="true" aria-controls="cliente_contenido">
                          Registrar
                        </a>
                            </h5>
                        </div>
                        <div id="cliente_contenido" class="collapse in" role="tabpanel" aria-labelledby="cliente">
                            <div class="card-body">
                               <!-- formulario empleado -->
                               
                               <form action="<?=RUTA_URL?>administrador/registrarVendedor" method="POST" id="alquiler">
                                    <input type="number" class="form-control" name="dni" placeholder="dni" id="dni">
                                    <input type="date" class="form-control" name="fecha_nacimiento" placeholder="fecha_nacimiento" id="fecha_nacimiento">
                                    <input type="text" class="form-control" name="nombre" placeholder="nombre" id="nombre">
                                    <input type="text" class="form-control" name="apellido" placeholder="apellido" id="apellido">
                                    <select name="tipo_documento" class="form-control">
                                        <option value="1">Cédula</option>
                                        <option value="2">Tarjeta de identidad</option>
                                    </select>
                                    <button type="submit" class="btn btn-outline-success form-control mt-2">Registrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                
                </div>                 
            </div>
        </div>
    </div>
  