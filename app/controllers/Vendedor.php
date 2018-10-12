<?php 
/**
  * @author:Felipe
  * Funcionalidad vendedor 
*/
 class Vendedor extends Controller
 {
 	
 	function __construct()
 	{
 		# code...
 	}
 	public function mostrarRegistrarCliente()
	{
		parent::viewIntern('vendedor/index','vendedor/cliente');
	}	
	public function mostrarMenu()
	{
		parent::viewIntern('vendedor/index','vendedor/ventas');
	}	
 	public function registrarCliente()
	{
		echo "Entro!";
	}	
 	public function mostrarRegistrarAlquiler()
	{
		parent::viewIntern('vendedor/index','vendedor/alquiler');
	}	
 	public function registrarAlquiler()
	{
		echo json_encode($_POST);
	}	
 	public function consultarAlquileresHechos()
	{
		$array=['nombre'=>'Juan','edad'=>'16','dni'=>$_POST['dni']];
		echo json_encode($array);
	}	
 	public function mostrarConsultarAlquileresCP ()
	{
		echo "Entro!";
	}	
 	public function consultarAlquileresCP()
	{
		echo "Entro!";
	}	
 	public function consultarAlquileresMora()
	{
		echo "Entro!";
	}	
 	public function actualizarEstadoAlquiler()
	{
		echo "Entro!";
	}	
 	
 } 
 ?>