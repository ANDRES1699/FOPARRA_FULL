<?php 
/**
  * @author:Felipe
  * Funcionalidad Index
  */
class Index extends Controller
{
	private $model;
	private $token;
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
			if($data!=null){
				if ($data->contrasenia != md5($_POST['pass'])) {			
					header('Location:'.RUTA_URL.'index/index');
				} else {
					// iniciar_sesion
					$this->token=md5(random_int(10,100));
					$data=['dni'=>$_POST['dni'],'token'=>$this->token];
					//$_SESSION['usuario']->token=$this->token;
					//var_dump($data);
					$data=$this->model->agregarToken($data);
					$data=$this->model->consultarUsuario($_POST['dni']);
					$_SESSION['usuario']=$data;
					$sesion=json_encode(['token'=>$this->token]);
					echo "<script>							
							localStorage.setItem('usuario', JSON.stringify(".$sesion."));
						 </script>";
					if ($data->rol_idrol == 2) {
						header("Refresh:0; url=".RUTA_URL."vendedor/mostrarMenu");	
					} elseif($data->rol_idrol ==3) {
						//var_dump($_SESSION['usuario']);
						// agregar token
						 header("Refresh:0; url=".RUTA_URL."administrador/mostrarMenu");			 
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
	public function consultarToken()
	{
		$data=$this->model->consultarUsuario($_SESSION['usuario']->dni);
		if ($data!=null) {
			$access=['acceso'=>false];
			if ($_SESSION['p']==$data->_token) {
				$access=['acceso'=>true];
			} else {
				$access=['acceso'=>false];
			}
			echo json_encode($access);
		} else {
			header('Location:'.RUTA_URL.'index/index');
		}
		
	}	
	public function cerrarSesion()
	{
		// cerrar localStorage
		session_destroy();
		echo "<script>							
				localStorage.removeItem('usuario');
			 </script>";
		header("Refresh:0; url=".RUTA_URL."index/index");	
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