<!-- Copyright (C) author:Felipe  -->
<div class="contenedor-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-8 mt-5 mx-2">
            <h1 class="display-5 mb-2">Peliculas</h1>
                <div id="accordianId" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="cliente">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordianId" href="#cliente_contenido" aria-expanded="true" aria-controls="cliente_contenido">
                          Aventura
                        </a>
                            </h5>
                        </div>
                        <div id="cliente_contenido" class="collapse in" role="tabpanel" aria-labelledby="cliente">
                            <div class="card-body">
                               <!-- peliculas de aventura -->
                               <div class="container" >
                                    <div class="row" id="2">
                                 
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="estado">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordianId" href="#estado_contenido" aria-expanded="true" aria-controls="estado_contenido">
                                    Ficción
                        </a>
                            </h5>
                        </div>
                        <div id="estado_contenido" class="collapse in" role="tabpanel" aria-labelledby="estado">
                            <div class="card-body">
                                <!-- peliculas ficción -->
                                <div class="container" >
                                    <div class="row" id="3">
                                      
                                    </div>
                               </div>
                            </div>
                        
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="estado">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordianId" href="#amor" aria-expanded="true" aria-controls="amor">
                                    Amor
                        </a>
                            </h5>
                        </div>
                        <div id="amor" class="collapse in" role="tabpanel" aria-labelledby="estado">
                            <div class="card-body">
                                <!-- peliculas ficción -->
                                <div class="container" >
                                    <div class="row" id="4">
                                      
                                    </div>
                               </div>
                            </div>
                        
                        </div>
                    </div>
                </div>                 
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
           categoria(2);
           categoria(3);
           categoria(4);

        });
        function categoria(id){
            $.ajax({
                method: "POST",
                url: "<?=RUTA_URL?>vendedor/consultarP/"+id,
                dataType: "json",
                    success: function(data){
                        $.each(data, function(i, v) { 
                             $('#'+id).append( '<div class="col-4"><div class="card"><div class="card-header p-0 m-0"><img src="<?=RUTA_URL?>img/'+v.imagen+'" alt="" class="img-fluid "></div><div class="card-body">'+v.nombre+' - '+v.actorPrincipal+'- $'+v.precio+' </div></div></div>');
                        });
                        console.log(data);
                    }
                });
        }
       
    </script>