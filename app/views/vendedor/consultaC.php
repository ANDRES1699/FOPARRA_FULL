<!-- Ventas -->
<!-- Copyright (C) author:Felipe  -->
<div class="contenedor-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-8 mt-5 mx-2">
            <table id="table_id" class='display table table-fluid table table-bordered table-white table-hover'>				
                <thead>
                    <th>id</th>
                    <th>fecha de nacimiento</th>
                    <th>nombre</th>
                    </thead>
                <tbody>               
                    
                    <?php foreach ($data as $fila):?>
                        <tr onclick="pdf(<?=$fila->idusuario;?>);">
                            <td>                               
                                <br><?=$fila->idusuario;?> 
                            </td>
                            <td>                               
                                <br><?=$fila->fecha_nacimiento;?> 
                            </td>
                            <td>                               
                                <br><?=$fila->nombre;?> 
                            </td>                         
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
                </div>
        </div>
    </div>
    <script>
        function pdf(id){
            location.href = "<?=RUTA_URL?>vendedor/mostrarPDFCl/"+id;
        }
    </script>
    <style>
        #ventas{
            background-color: rgb(41, 70, 124)!important;
        }
    </style>
