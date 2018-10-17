<?php 
/**
  * @author:Felipe
  * Funcionalidad administrador 
*/
 class Administrador extends Controller
 {
	 private $model;
	function __construct()
 	{
		$this->model=parent::model('administrador');
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
		$this->model->registrarVendedor($_POST);
		header('Location:'.RUTA_URL.'administrador/mostrarRegistrarVendedor');
	}	
 	public function mostrarRegistrarVendedor()
	{
		parent::viewIntern('administrador/index','administrador/empleado');
	}	
 } 
 ?>