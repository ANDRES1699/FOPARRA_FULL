<div class="container-fluid">
    <!-- menu -->
    <div class="menu">
            <nav id="navV">
        <ul>
            <li>
                <div class="barra">
                <a href="http://" target="_blank" rel="noopener noreferrer">Cliente <i class="ml-2 fa fa-address-book-o" aria-hidden="true"></i></a>
                </div>
            </li>
            <li>
                <div class="barra">
                <a href="http://" target="_blank" rel="noopener noreferrer">Alquiler <i class="ml-2 fa fa-film" aria-hidden="true"></i> </a>
                </div>
            </li>
        
            <li>
                <div class="barra">
                <a href="http://" target="_blank" rel="noopener noreferrer">Consultar <i class="ml-2 fa fa-address-book-o" aria-hidden="true"></i> <i class="ml-2 fa fa-film" aria-hidden="true"></i></a>
                </div>
            </li>
            <li>
                <div class="barra">
                <a href="http://" target="_blank" rel="noopener noreferrer">Morosos <i class="ml-2 fa fa-file-movie-o" aria-hidden="true"></i></a>
                </div>
            </li>
            <li>
                <div class="barra">
                <a href="http://" target="_blank" rel="noopener noreferrer">Estado <i class="ml-2 fa fa-circle-o-notch" aria-hidden="true"></i></a>
                </div>
            </li>
            <li>
                <div class="barra">
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
            <div class="col-10">
                <nav class="navbar navbar-expand-sm navbar-light bg-light px-5 shadow" id="menu">
                    <img src="<?php echo RUTA_URL?>img/logo.png" id="logo" class="navbar-brand">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <a class="navbar-brand m-auto text-white" href="#" id="lema">Vendedor <i class="fa fa-user-circle-o pl-1" aria-hidden="true"></i></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Alquileres hechos -->
    <div class="contenedor-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-8 mt-5">
                <table class="table table-responsive table-hover table-inverse">
                    <thead class="text-center">
                        <tr>
                            <th>Número de alquiler</th>
                            <th>Cliente</th>
                            <th>Número de peliculas</th>
                            <th>Fecha de entrega</th>
                            <th>Fecha a recibir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Lorem ipsum dolor sit amet. 
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet. 
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet. 
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet. 
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet. 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Lorem ipsum dolor sit amet. 
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet. 
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet. 
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet. 
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet. 
                            </td>
                        </tr>
                    </tbody>
                </table>
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
#navV{
    position: fixed!important;
    z-index: 15;  left: 83%;
    width: 17%!important;
    height: 100%!important;
    background-color: darkorange!important;
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
    background-color: #000!important;
    -webkit-transition: width 2s;
}

.barra:hover {
    width: 300px;
}
</style>
