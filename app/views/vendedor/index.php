<div class="container-fluid">
    
    <!-- menu -->
    <div class="menu">
        
    <nav id="navV">
        <ul>
        <div class="w-100 d-flex align-items-center">
            <img src="https://cdn.pixabay.com/photo/2016/03/31/20/37/client-1295901_960_720.png" class="mx-auto mb-5 rounded-circle" id="vendedor" alt=""> 
        </div>
       
            <li class="mt-3">
                <div class="barra">
                <a href="#" rel="noopener noreferrer">Crear</a>
                    <a href="<?=RUTA_URL?>vendedor/mostrarRegistrarCliente"><i class="fa fa-address-book-o" aria-hidden="true"></i></a>
                    <a href="<?=RUTA_URL?>vendedor/mostrarRegistrarAlquiler"><i class="fa fa-film" aria-hidden="true"></i></a>
                </div>
            </li>        
            <li>
                <div class="barra">
                <a href="#" rel="noopener noreferrer">Consulta <i class="ml-2 fa fa-address-book-o" aria-hidden="true"></i> <i class="ml-2 fa fa-film" aria-hidden="true"></i></a>
                </div>
            </li>
            <li>
                <div class="barra">
                     <a href="#" rel="noopener noreferrer">Morosos<i class="ml-2 fa fa-file-movie-o" aria-hidden="true"></i></a>
                </div>
            </li>
            <li>
                <div class="barra">
                <a href="#" rel="noopener noreferrer">Estado <i class="ml-2 fa fa-circle-o-notch" aria-hidden="true"></i></a>
                </div>
            </li>
            <li>
                <div class="barra cerrar">
                    <!-- target="_blank" rel="noopener noreferrer" -->
                <a href="<?php echo RUTA_URL?>index/index" >Cerrar <i class="ml-1 fa fa-close" aria-hidden="true"></i></a>
                </div>
            </li>
        </ul>
    </nav>
    </div>
    <!-- cabecera -->
    <div class="contenedor-fluid">
        <div class="row">
            <div class="col-11 p-0">
                <nav class="navbar navbar-expand-sm navbar-light bg-light px-5 mr-5 shadow" id="menu">
                    <img src="<?php echo RUTA_URL?>img/logo.png" id="logo" class="navbar-brand">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <a class="navbar-brand m-auto text-white pr-3" href="<?=RUTA_URL?>vendedor/mostrarMenu" id="lema">Vendedor <i class="fa fa-user-circle-o pl-1" aria-hidden="true" id="icon-ven"></i></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>

   
    <div class="contenedor-fluid fixed-bottom">
        <div class="row">
            <div class="col-10 text-center ">     
                    <div class="row  w-100 navbar-light bg-light">
                        <div class="col ml-5">
                        Lorem ipsum dolor sit amet. 
                        </div>
                        
                        <div class="col">
                        Lorem ipsum dolor sit amet.
                        </div>
                        
                        <div class="col">
                        Lorem ipsum dolor sit amet. 
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- Estilos -->
<style> 
/* columna */
#navV{
    position: fixed!important;
    z-index: 15;  left: 87%;
    width: 13%!important;
    height: 100%!important;
    background-color: darkorange!important;
}
/* Elementos columna */
#navV ul{
  margin-top: 20%;
  list-style: none;
  display: block;
}
#vendedor{
    width:80%;
}
/* icono vendedor */
#icon-ven{
    color: rgb(41, 70, 124)!important;
}


/* #pie{
    position: absolute;
    left: 0px;
    top: 100%;
    z-index: -1;
} */
.barra {
    width: 100px;
    height: 100px;
    background-color: rgb(41, 70, 124)!important;
    -webkit-transition: width 2s;
}

.barra:hover {
    width: 300px;
}
.cerrar:hover {
    background-color: rgb(235, 38, 24)!important;
    width: 300px;
}
</style>
