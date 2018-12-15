<!-- Registrar cliente -->
<!-- Copyright (C) author:Felipe  -->
<div class="contenedor-fluid">
        <div class="row">
            <div class="col-1"></div>
                <div class="col-8 mt-5 mx-2">
                <h1 class="display-5 mb-2">Cliente</h1>
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
                            <form action="" method="POST" id="alquiler">
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
                    <div class="card">
                        <div class="card-header" role="tab" id="estado">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordianId" href="#estado_contenido" aria-expanded="true" aria-controls="estado_contenido">
                                    Actualizar
                        </a>
                            </h5>
                        </div>
                        <div id="estado_contenido" class="collapse in" role="tabpanel" aria-labelledby="estado">
                            <div class="card-body">
                                <form action="" method="POST">
                                    <input type="text" class="form-control" name="dni_act" placeholder="dni" id="dni_act">                            
                                    <button type="button" class="btn btn-outline-success mt-2 form-control" data-toggle="modal" data-target="#modelId" onclick="actualizar();">
                                      Enviar
                                    </button>
                                    
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>                                
                                                        </div>
                                                        <div class="modal-body" id="frm_c">
                                                        
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" id="act">Actualizar</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                                                    
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        
                        </div>
                    </div> 
                </div>                 
                   
            </div>
        </div>
    </div>
    
