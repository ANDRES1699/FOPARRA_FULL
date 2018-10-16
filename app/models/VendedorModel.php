<?php 
/**
  * @author:Felipe
  * Funcionalidad modelo vendedor 
*/
class VendedorModel extends UsuarioModel
{
	private $db;
	function __construct()
 	{
		$this->db=new Database();
 	}
 	public function registrarCliente($data)
	{
		echo "Entro!";
	}	
 	public function registrarAlquiler($dni,$fecha)
	{
		try{
			$this->db->query("INSERT INTO `alquiler`(`fecha_fin`, `usuario_vendedor`, `estado_idestado`, `usuario_idcliente`) VALUES (?,?,1,?)");
			$this->db->bindP(1,$fecha);
			$this->db->bindP(2,$_SESSION['usuario']->idusuario);
			$this->db->bindP(3,$dni);
			$this->db->execute();
		}
		catch(Exception $e){
			die($e);
		}
	} 
	public function consultarAlquileres(){
		$this->db->query("SELECT * FROM `alquiler`");
		$this->db->execute();
		return $this->db->rowCount();
	}	
	public function registrarPeliculaAlquiler($data){
		$this->db->query("INSERT INTO `alquiler_has_pelicula`(`alquiler_id_alquiler`, `pelicula_cod_pelicula`) VALUES (?,?)");
		$this->db->bindP(1,$data['alquiler_id_alquiler']);
		$this->db->bindP(2,$data['pelicula_cod_pelicula']);
		$this->db->execute();
	}
	public function consultarAlquileresCliente($data)
	{
		echo "Entro!";
	}	
	public function consultarAlquiler($data)
	{
		$this->db->query("SELECT * FROM alquiler WHERE id_alquiler=?");
		$this->db->bindP(1,$data);
		$this->db->execute();
		return $this->db->show();
	}	
 	public function consultarAlquileresPelicula($data)
	{
		echo "Entro!";
	} 
	public function consultarAlquileresVencidos($data)
	{
		echo "Entro!";
	}	
 	public function actualizarEstadoAlquileres($data)
	{
		echo "Entro!";
	}
	public function consultarAlquileresVendedor($data)
	{
		echo "Entro!";
	}
}

 ?>