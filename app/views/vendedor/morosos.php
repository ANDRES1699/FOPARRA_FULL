<!-- Ventas -->
<!-- Copyright (C) author:Felipe  -->
<div class="contenedor-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-8 mt-5 mx-2">
            <table id="table_id" class='display table table-fluid table table-bordered table-white table-hover'>				
                <thead>
                    <th>id</th>
                    <th>fecha inicio</th>
                    <th>fecha fin</th>
                    <th>estado</th>
                    </thead>
                <tbody>               
                    
                    <?php foreach ($data as $fila):?>
                        <tr onclick="alquiler(<?=$fila->id_alquiler;?>);">
                             <td>                               
                                <br><?=$fila->id_alquiler;?> 
                            </td>
                            <td>                               
                                <br><?=$fila->fecha_inicio;?> 
                            </td>
                            <td>                               
                                <br><?=$fila->fecha_fin;?> 
                            </td>
                            <td>                               
                                <br><?=$fila->nombre_estado;?> 
                            </td>                         
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
                </div>
        </div>
    </div>
    <script>
    function alquiler(id){
            $.ajax({
                    method: "POST",
                    url: "<?=RUTA_URL?>vendedor/actualizarAl",
                    data: {estado_idestado: 3, id_alquiler:id},
                    dataType: "json",
                        success: function(data){
                            console.log(data);
                            
                        }
                   });
                    location.href = "<?=RUTA_URL?>vendedor/mostrarMorosos";
            console.log(id);
    }
    </script>