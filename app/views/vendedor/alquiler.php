<!-- Registrar alquiler -->
<div class="contenedor-fluid">
        <div class="row">
            <div class="col-1"></div>
                <div class="col-8 mt-5 mx-2">
                <h1 class="display-5 mb-2">Alquiler</h1>
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
                                
                                <form  method="POST" id="alquiler">
                                    <input type="text" class="form-control" name="dni" placeholder="id cliente" id="dni">
                                    <input type="text" class="form-control" name="num_pel" placeholder="número de pelicula" id="num_pel">
                                    <a title="Agregar pelicula" class="d-flex justify-content-end p-2 display-4" id="agregar"><i class="fa fa-file-movie-o" aria-hidden="true" id="pelicula"></i> </a>                
                                    <a title="Agregar pelicula" class="btn btn-success mt-2 form-control text-white " id="agregarA" onclick="alquilar();">Agregar</a>
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
                                    <button type="button" class="btn btn-success mt-2 form-control" data-toggle="modal" data-target="#modelId" onclick="actualizar();">
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
                                                <div class="modal-body" id="frm_act">
                                                    <form action="" method="post">
                                                    
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
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
  
    <style>
        #pelicula{
            color: rgb(41, 70, 124)!important;
        }
        }
        #ventas{
            background-color: rgb(41, 70, 124)!important;
        }
    </style>
    <script>
     var id_pel, arrayElementos, arrayValores;
      $(document).ready(function() {
         
        
          $('#agregar').click(function() { 
        //    valores de los campos
            if(id_pel==null){
                array=['#num_pel'];
                id_pel=0;
            };
              id_pel++;
        // agregar
              
            $('#agregarA').remove();
            $('#alquiler').append('<input type="text" class="form-control" name="num_pel'+id_pel+'" placeholder="número de pelicula" id="num_pel'+id_pel+'"><a title="Agregar pelicula" class="btn btn-success mt-2 form-control" id="agregarA" onclick="alquilar();">Agregar</a>');
            array.push('#num_pel'+id_pel);
            console.log(id_pel, array);
          });


      });

        //   evento click
      function alquilar(){
        arrayValores=[];
        if(id_pel==null){
                array=['#num_pel'];
                id_pel=0;
        };
        // foreach
          $.each(array, function (i, v) { 
           arrayValores.push($(v).val());
             console.log(i,v);
          });
        //   AJAX
        $.ajax({
                method: "POST",
                url: "<?=RUTA_URL?>vendedor/registrarAlquiler",
                data: {dni:$('#dni').val(), peliculas: arrayValores },
                    success: function(data){
                        console.log(data);
                    }
                });
       
       console.log(arrayValores);
      }
    //   actualizar
    function actualizar(){
        $('#frm_act').html('<p>lorem</p>');
        $.ajax({
                method: "POST",
                url: "<?=RUTA_URL?>vendedor/consultarAlquileresHechos",
                data: {dni:$('#dni_act').val()},
                dataType: "json",
                    success: function(data){
                        modal(data);
                    }
                });
    }

    function modal(data){
        // modal
            $('#frm_act').html('<form action="" method="post">'+campo('id_alquiler',data.id_alquiler)+campo('cliente',data.usuario_idcliente)+'<select class="form-control" name="estado" id="" value="'+data.estado_idestado+'"><option value="1">Activo</option><option value="2">Inactivo</option></select><button type="submit" class="btn btn-primary mt-2">Save</button></form>');
          
    }
    function campo(nombre,valor){
        return '<input type="text" class="form-control" name="'+nombre+'" placeholder="'+nombre+'" id="'+nombre+'" value="'+valor+'">';
    }
    </script>