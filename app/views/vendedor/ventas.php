<!-- Ventas -->
<!-- Copyright (C) author:Felipe  -->
<div class="contenedor-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-8 mt-5 mx-2">
            <table id="table_id" class='display table table-fluid table table-bordered table-white table-hover'>				
                <thead>
                    <th>id</th>
                    <th>nombre</th>
                    <th>versión</th>
                    <th>descripción</th>
                    <th>programa al que pertenece</th>
                    </thead>
                <tbody>
                   
                    <?php foreach ($data as $fila):?>
                        <tr>
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
                                <br><?=$fila->usuario_idcliente;?> 
                            </td>
                            <td>                                
                                <br><?=$fila->estado_idestado;?> 
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
                </div>
        </div>
    </div>
    <style>
        #ventas{
            background-color: rgb(41, 70, 124)!important;
        }
    </style>
