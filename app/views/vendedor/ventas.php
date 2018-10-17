<!-- Ventas -->
<div class="contenedor-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-8 mt-5 mx-2">
                <table class="table table-responsive table-hover table-inverse shadow">
                    <thead class="text-center">
                        <tr>
                            <th colspan="5" class="text-white" id="ventas">Ventas</th>
                        </tr>
                        <tr>
                            <th>Número de alquiler</th>
                            <th>Fecha de entrega</th>
                            <th>Fecha a recibir</th>
                            <th>Cliente</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>Eveniet delectus minima minus unde!</td>
                        <td>Explicabo adipisci unde placeat dolore?</td>
                        <td>Odio asperiores eius sunt? Consectetur!</td>
                        <td>Corporis, eveniet. Ducimus, quod minus!</td>
                    </tr>
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
