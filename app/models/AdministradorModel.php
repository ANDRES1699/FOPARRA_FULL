<?php 
/**
  * @author:Felipe
  * Funcionalidad modelo administrador 
*/
class AdministradorModel extends UsuarioModel
{

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
	public function registrarP($data,$file)
	{
		$this->db->query("INSERT INTO `pelicula`( `imagen`, `nombre`, `actorPrincipal`, `duracion`, `precio`, `cantidad`, `estado_idestado`, `cat_idcat`) VALUES (?,?,?,?,?,?,1,?)");
		$this->db->bindP(1,$file);
		$this->db->bindP(2,$data['nombre']);
		$this->db->bindP(3,$data['actor']);
		$this->db->bindP(4,$data['duracion']);
		$this->db->bindP(5,$data['precio']);
		$this->db->bindP(6,$data['cantidad']);
		$this->db->bindP(7,$data['categoria']);
		$this->db->execute();
	}	
 	public function actualizarEstadoPeliculas($data)
	{
		echo "Entro!";
	}
	public function acatualizarE($data){
		$this->db->query("UPDATE usuario SET contrasenia=? WHERE dni=?");
		$this->db->bindP(1,$data['contrasenia']);
		$this->db->bindP(2,$data['dni']);
		$this->db->execute();
	}
	public function consultU(){
		$this->db->query("SELECT * FROM usuario");
		$this->db->execute();
		return $this->db->showAll();
	}
}

 ?>