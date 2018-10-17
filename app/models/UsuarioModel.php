<?php 
/**
  * @author:Felipe
  * Funcionalidad modelo usuario 
*/
class UsuarioModel
{
	private $db;
	function __construct()
 	{
 		$this->db=new Database();
 	}
 	public function consultarPeliculas($data='')
	{
		
	}	
 	public function registrarPelicula($data='')
	{
		echo "Entro!";
	}
	public function consultarUsuarios($rol)
	{
		echo "Entro!";
	}
	public function consultarUsuario($id)
	{
		$this->db->query("SELECT * FROM usuario WHERE dni=?");
		$this->db->bindP(1,$id);
		$this->db->execute();
		return $this->db->show();
	}
	public function agregarToken($data){
		$this->db->query("UPDATE usuario SET _token=? WHERE dni=?");
		$this->db->bindP(1,$data['token']);
		$this->db->bindP(2,$data['dni']);
		$this->db->execute();
	}
	public function quitarToken($data){
		$this->db->query("UPDATE usuario SET _token='' WHERE dni=?");
		$this->db->bindP(1,$data['token']);
		$this->db->bindP(2,$data['dni']);
		$this->db->execute();
	}
}

 ?>