<script>
    var data=JSON.parse(localStorage.getItem('usuario'));
    console.log(data);
    $(document).ready(function() {
        if (data==null) {
            location.href="<?=RUTA_URL?>index/index";
        } else {
        $.ajax({
                method: "POST",
                url: "<?=RUTA_URL?>index/consultarToken/"+data.token,
                data: '',
                dataType: "json",
                    success: function(data){
                        console.log(data);
                        if (data.accesso==false) {
                            location.href="<?=RUTA_URL?>index/index";
                        }
                    },
                    error: function(){
                        location.href="<?=RUTA_URL?>index/index";
                    }
            });
        }
    });
</script>
<div class="container-fluid">
    
    <!-- menu -->
    <div class="menu">
        
    <nav id="navV">
        <ul>
        <div class="w-100 d-flex align-items-center">
            <img src="<?=RUTA_URL?>img/icn1.png" class="mx-auto mb-5 rounded-circle" id="vendedor" alt=""> 
        </div>
       
            <li class="mt-3">
                <div class="barra">
                <a href="#" rel="noopener noreferrer">Gestiona</a>
                    <a href="<?=RUTA_URL?>vendedor/mostrarRegistrarCliente" class="px-0" title="Cliente"><i class="fa fa-address-book-o" aria-hidden="true"></i></a>
                    <a href="<?=RUTA_URL?>vendedor/mostrarRegistrarAlquiler" title="Alquiler"><i class="fa fa-film" aria-hidden="true"></i></a>
                </div>
            </li>        
            <li>
                <div class="barra">
                <a href="#" rel="noopener noreferrer" class="pr-2">Consulta</a>
                <a href="" title="Consultar cliente" class="px-0"><i class="ml-2 fa fa-address-book-o" class="px-0" aria-hidden="true"></i> </a>
                <a href="<?=RUTA_URL?>vendedor/mostrarPeliculas" title="Consultar peliculas" class="px-2"><i class="ml-2 fa fa-film" aria-hidden="true"></i></a>
                </div>
            </li>
            <li>
                <div class="barra">
                    <a href="#" rel="noopener noreferrer" title="Clientes morosos">Morosos<a href=""><i class="p-0 fa fa-file-movie-o" aria-hidden="true"></i></a></a>
                </div>
            </li>
            <li>
                <div class="barra">
                  <a href="#" rel="noopener noreferrer" title="Cambiar estado">Estado<a href=""><i class="fa fa-circle-o-notch" aria-hidden="true"></i></a></a>
                </div>
            </li>
            <li>
                <div class="barra cerrar">
                    <!-- target="_blank" rel="noopener noreferrer" -->
                <a href="<?php echo RUTA_URL?>index/cerrarSesion" >Cerrar<a href=""><i class="fa fa-close" aria-hidden="true"></i></a></a>
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
                    <img src="<?php echo RUTA_URL?>img/logo.png" id="logo" class="navbar-brand mr-0">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse pr-5" id="collapsibleNavId">
                         <a class="navbar-brand m-auto text-white" href="<?=RUTA_URL?>vendedor/mostrarMenu" id="lema">Vendedor <i class="fa fa-user-circle-o pl-1" aria-hidden="true" id="icon-ven"></i></a>
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
