<div class="contenedor-fluid">
        <div class="row p-5">
            <div class="col-1"></div>
            <div class="col-8 mt-5 mx-2">
            <h1 class="display-5 mb-2">Pelicula</h1>
            <form action="<?=RUTA_URL?>administrador/registrarP"  method="post" autocomplete="off" enctype="multipart/form-data">
               <input type="file" class="form-control" placeholder="imagen" name="img">
               <input type="text" class="form-control" placeholder="nombre" name="nombre">
               <input type="text" class="form-control" placeholder="actor principal" name="actor">
               <input type="text" class="form-control" placeholder="duracion" name="duracion">
               <input type="number" class="form-control" placeholder="precio" name="precio">
               <input type="number" class="form-control" placeholder="cantidad" name="cantidad">
               <select name="categoria" class="form-control">
                   <option value="1">Acción</option>
                   <option value="2">Aventura</option>
                   <option value="3">Ficción</option>
                   <option value="4">Amor</option>
               </select>
               <button type="submit" class="form-control mt-3 btn btn-outline-primary">Registrar</button>
            </form>
        </div>
    </div>
</div>