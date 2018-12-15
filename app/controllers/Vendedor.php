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
	public function consultarC()
	{
		$num=$this->model->consultarCliente($_POST['dni']);
		echo json_encode($num);
	}
	public function MActualizarE()
	{
		parent::viewIntern('vendedor/index','vendedor/estado');
	}	
 	public function ActualizarE()
	{
		$data=['dni'=>$_SESSION['usuario']->dni,'contrasenia'=>md5($_POST['contrasenia'])];
		$data=$this->model->acatualizarE($data);
		header('Location:'.RUTA_URL.'vendedor/mostrarMenu');
	}	
	public function actualizarC()
	{
		$data=$this->model->actualizarClient($_POST);
		echo json_encode($_POST);		
		// header('Location:'.RUTA_URL.'vendedor/mostrarRegistrarCliente');
	}	
	public function registrarCl()
	{
		$this->model->registrarC($_POST);
		header('Location:'.RUTA_URL.'vendedor/mostrarRegistrarCliente');
	}	
	public function actualizarAl()
	{
		$this->model->actualizarA($_POST);
		echo json_encode($_POST);
	}
	
	public function mostrarCl()
	{
		$data=$this->model->consultarC();
		parent::viewIntern('vendedor/index','vendedor/consultaC',$data);
	}
	public function mostrarPDFCl()
	{
		$data=$this->model->alquilerCliente($_SESSION['p']);	
		$dataT=$this->model->alquileresCliente($_SESSION['p']);		
		//pdf
		if ($data==null) {
			header('Location:'.RUTA_URL.'vendedor/mostrarCl');
		}
		else{
			$pdf=new PDF();
			$pdf->AddPage();
			$pdf->SetFont('Arial','',12);
			$html='<h2>'.$data->nombre.' '.utf8_decode($data->apellido).' - Cliente</h2><br><br>';

			$pdf->WriteHTML($html);
			$html="<table>
						<thead>
							<tr>
								<td>Id alquiler</td>
								<td>Fecha inicio</td>
								<td>Fecha fin</td>
							</tr>
						</thead>
					</table>";
			$pdf->WriteHTML($html);
			foreach ($dataT as $fila) {		
				$html='<table border="1">
							<tr>
								<td>'.$fila->id_alquiler.'</td><td>'.$fila->fecha_inicio.'</td><td>'.$fila->fecha_fin.'</td>
							</tr>						
						</table>';	
				$pdf->WriteHTML($html);
			}

			
			$pdf->Output();
			}
	}
	public function mostrarMorosos()
	{
		$data=$this->model->morosos();
		foreach ($data as $key) {
			$datetime1 = new DateTime($key->fecha_fin);
			$datetime2 = new DateTime(date('Y-m-d'));
			$interval = $datetime1->diff($datetime2);
			$diferencia=$interval->format('%R%a');
			if ($diferencia>=1 and $key->estado_idestado==1) {
				$d=['estado_idestado'=>2, 'id_alquiler'=>$key->id_alquiler];
				$data=$this->model->actualizarA($d);
			}
		}
		$data=$this->model->morososI();	
		parent::viewIntern('vendedor/index','vendedor/morosos',$data);
	}
 
 } 
 ?>