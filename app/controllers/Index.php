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
		// validar contraseña y rol
		try{
			$data=$this->model->consultarUsuario($_POST['dni']);
			
			if($data){
				var_dump($data);
				if ($data->contrasenia != $_POST['pass']) {
					header('Location:'.RUTA_URL.'index/index');
				} else {
					if ($data->rol_idrol == 2) {
						header('Location:'.RUTA_URL.'vendedor/mostrarMenu');
					} elseif($data->rol_idrol ==3) {
						# code...
					}
					else{
						header('Location:'.RUTA_URL.'index/index');
					}
					
				}
				
			}
			else{
				header('Location:'.RUTA_URL.'index/index');
			}
			
		}
		catch(Exception $e){
			die($e);
		}
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