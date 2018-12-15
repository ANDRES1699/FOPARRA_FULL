<!-- cabecera -->
<nav class="navbar navbar-expand-sm navbar-light bg-light py-0 px-5 shadow" id="menu">
    <img src="<?php echo RUTA_URL?>img/foparra 2.png" id="logo" class="navbar-brand mr-5">
    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
    <a class="navbar-brand ml-auto text-white index" href="#" id="lema">"El séptimo arte encanta al ser humano"</a><i class="fa fa-institution" aria-hidden="true"></i>
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active px-3">
                <h5>
                    <a class="nav-link index" href="#" data-toggle="modal" data-target="#modelId">Iniciar sesión</a>
                </h5>
            </li>
   
        </ul>

    </div>
</nav>


<!-- Modal -->
<div class="modal fade " id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
             </div>
            <div class="modal-body">
                <form action="<?php echo RUTA_URL?>index/iniciarSesion" method="POST">
                      <h4 class="text-center mb-4">Iniciar sesión</h4>
                      <label for="num">Número de documento:</label>
                      <input type="number" class="form-control" name="dni" id="dni" placeholder="">
                      <label for="contraseña">Contraseña:</label>
                      <input type="password" class="form-control" name="pass" id="pass" placeholder="">
                    
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
                </form>
        </div>
    </div>
</div>

<!-- carousel -->
<div id="carouselId" class="carousel slide shadow" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner text-center" role="listbox">
        <div class="carousel-item active jsutify-content-center align-items-center ">
         <img src="<?=RUTA_URL?>img/gal2.jpg" class="w-100" id="img" alt="First slide">
            
        </div>
        <div class="carousel-item">
            <img src="<?=RUTA_URL?>img/gal1.jpg" class="w-100" id="img" alt="First slide"> 
        </div>
        <div class="carousel-item">
            <img src="<?=RUTA_URL?>img/gal3.jpg" alt="" class="w-100" id="img">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="jumbotron text-white" id="footer">
	<div class="container">
		<div class="row">
			<div class="col-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. 
			</div><div class="col-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. 
			</div><div class="col-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. 
			</div>
		</div>
	</div>
</div>
