<?php 
/**
  * @author:Felipe
  * Funcionalidad modelo administrador 
*/
class AdministradorModel extends UsuarioModel
{
	private $db;	
	function __construct()
 	{
		$this->db=new Database();
 	}
 	public function registrarVendedor($data)
	{
		$this->db->query("INSERT INTO `usuario`(`dni`, `fecha_nacimiento`, `nombre`, `apellido`,`contrasenia`, `rol_idrol`, `tipo_documento`) VALUES (?,?,?,?,?,2,?)");
		$this->db->bindP(1,$data['dni']);
		$this->db->bindP(2,$data['fecha_nacimiento']);
		$this->db->bindP(3,$data['nombre']);
		$this->db->bindP(4,$data['apellido']);
		$this->db->bindP(5,md5($data['dni']));
		$this->db->bindP(6,$data['tipo_documento']);
		$this->db->execute();
	}	
 	public function actualizarEstadoPeliculas($data)
	{
		echo "Entro!";
	}
}

 ?>