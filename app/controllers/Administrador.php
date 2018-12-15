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
	public function MActualizarE()
	{
		parent::viewIntern('administrador/index','administrador/estado');
	}	
 	public function ActualizarE()
	{
		$data=['dni'=>$_SESSION['usuario']->dni,'contrasenia'=>md5($_POST['contrasenia'])];
		$data=$this->model->acatualizarE($data);
		header('Location:'.RUTA_URL.'administrador/mostrarMenu');
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
	public function registrarP()
	{
		$file=basename($_FILES['img']['name']);
		move_uploaded_file($_FILES['img']['tmp_name'],'img/'.$_FILES['img']['name']);
		$this->model->registrarP($_POST,$file);
		header('Location:'.RUTA_URL.'administrador/mostrarPelicula');
	}	
 	public function mostrarRegistrarVendedor()
	{
		parent::viewIntern('administrador/index','administrador/empleado');
	}	
	public function mostrarUsuarios()
	{
		$data=$this->model->consultU();
		parent::viewIntern('administrador/index', 'administrador/usuario', $data);
	}	
	public function mostrarPelicula()
	{
		parent::viewIntern('administrador/index', 'administrador/pelicula');
	}	
 } 
 ?>