<div class="contenedor-fluid">
        <div class="row p-5">
            <div class="col-1"></div>
            <div class="col-8 mt-5 mx-2">
            <h1 class="display-5 mb-2">Estado</h1>
            <table id="table_id" class='display table table-fluid table table-bordered table-white table-hover'>
               <thead class="thead-inverse">
                   <tr>
                       <th>Número usuario</th>
                       <th>Usuario</th>
                   </tr>
                   </thead>                   
                   <tbody>
                   <?php foreach($data as $fila):?>
                       <tr>
                           <td scope="row"><?=$fila->dni;?></td>
                           <td><?=$fila->nombre.' '.$fila->apellido;?></td>
                       </tr>
                    <?php endforeach;?>
                   </tbody>
           </table>
        </div>
    </div>
</div>
 