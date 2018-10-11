<?php 
/**
  * @author:Felipe
  * Funcionalidad Index
  */
class Index extends Controller
{
	private $model;
	function __construct()
	{
		$this->model=parent::model('usuario');
	}
	public function index()
	{
		parent::view('index');
		$this->model->consultarPeliculas();
	}	
	
	public function iniciarSesion()
	{
		echo "Entro!";
	}	
	public function cerrarSesion()
	{
		echo "Entro!";
	}	
	public function mostrarRegistroPelicula()
	{
		echo "Entro!";
	}	
	public function registrarPelicula()
	{
		echo "Entro!";
	}
	public function consultarPelicula()
	{
		echo "Entro!";
	}
}
 ?>