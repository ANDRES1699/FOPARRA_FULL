<?php 
/**
  * @author:Felipe
  * Funcionalidad vendedor 
*/
 class Vendedor extends Controller
 {
 	private $model;
 	function __construct()
 	{
 		$this->model=parent::model('vendedor');
 	}
 	public function mostrarRegistrarCliente()
	{
		parent::viewIntern('vendedor/index','vendedor/cliente');
	}	
	public function mostrarMenu()
	{
		$data=$this->model->consultarAlquileresH($_SESSION['usuario']->idusuario);
		parent::viewIntern('vendedor/index','vendedor/ventas',$data);
	}	
 	public function registrarCliente()
	{
		echo "Entro!";
	}	
 	public function mostrarRegistrarAlquiler()
	{
		parent::viewIntern('vendedor/index','vendedor/alquiler');
	}	
	public function mostrarPeliculas()
	{
		parent::viewIntern('vendedor/index','vendedor/pelicula');
	}	
	public function consultarP()
	{
		$data=$this->model->consultarPeliculasT($_SESSION['p']);
		echo json_encode($data);
	}
 	public function registrarAlquiler()
	{
		// Fecha
		$fh=date('Y-m-j');
		$nfh=strtotime('+3 day', strtotime($fh));
		$fh=date('Y-m-j',$nfh);
		$this->model->registrarAlquiler($_POST['dni'],$fh);
		$num=$this->model->consultarAlquileres();
		foreach($_POST['peliculas'] as $peli){
			$data=['alquiler_id_alquiler'=>$num,'pelicula_cod_pelicula'=>$peli];
			$this->model->registrarPeliculaAlquiler($data);
		}	
		echo json_encode($_POST);
		
	}	
 	public function consultarAlquileresHechos()
	{
		$num=$this->model->consultarAlquiler($_POST['dni']);
		$fh=date('Y-m-d');
		$nfh=strtotime('+2 day', strtotime($fh));
		$array=['nombre'=>'Juan','edad'=>'16','dni'=>$_POST['dni'],'fecha'=>$nfh];
		echo json_encode($num);
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