<?php 
/**
  * @author:Felipe
  * Funcionalidad administrador 
*/
 class Administrador extends Controller
 {
	function __construct()
 	{
 		# code...
	 }
	public function mostrarMenu()
	{
		parent::view('administrador/index');
	}	
 	public function actualizarPelicula()
	{
		echo "Entro!";
	}	
 	public function registrarVendedor()
	{
		echo "Entro!";
	}	
 	public function mostrarRegistrarVendedor()
	{
		echo "Entro!";
	}	
 } 
 ?>