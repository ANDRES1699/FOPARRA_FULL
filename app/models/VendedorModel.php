<?php 
/**
  * Copyright (C) @author:Felipe 
  * Funcionalidad modelo vendedor 
*/
class VendedorModel extends UsuarioModel
{
	
	 public function registrarC($data)
	 {
		 $this->db->query("INSERT INTO `usuario`(`dni`, `fecha_nacimiento`, `nombre`, `apellido`,`contrasenia`, `rol_idrol`, `tipo_documento`) VALUES (?,?,?,?,?,1,?)");
		 $this->db->bindP(1,$data['dni']);
		 $this->db->bindP(2,$data['fecha_nacimiento']);
		 $this->db->bindP(3,$data['nombre']);
		 $this->db->bindP(4,$data['apellido']);
		 $this->db->bindP(5,null);
		 $this->db->bindP(6,$data['tipo_documento']);
		 $this->db->execute();
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
	public function consultarAlquileresH($data){
		$this->db->query("SELECT * FROM `alquiler` WHERE usuario_vendedor=?");
		$this->db->bindP(1,$data);
		$this->db->execute();
		return $this->db->showAll();
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
	public function consultarCliente($data)
	{
		$this->db->query("SELECT * FROM `usuario` WHERE `idusuario`=? AND rol_idrol=1");
		$this->db->bindP(1,$data);
		$this->db->execute();
		return $this->db->show();
	}
	public function consultarPeliculasT($data)
	{
	$this->db->query("SELECT * FROM `pelicula` WHERE cat_idcat=?");
		$this->db->bindP(1,$data);
		$this->db->execute();
		return $this->db->showAll();
	} 	
	public function consultarC()
	{
		$this->db->query("SELECT * FROM `usuario` WHERE  rol_idrol=1");
		$this->db->execute();
		return $this->db->showAll();
	} 	
	public function acatualizarE($data){
		$this->db->query("UPDATE usuario SET contrasenia=? WHERE dni=?");
		$this->db->bindP(1,$data['contrasenia']);
		$this->db->bindP(2,$data['dni']);
		$this->db->execute();
	}
	public function actualizarClient($data){
		$this->db->query("UPDATE `usuario` SET `fecha_nacimiento`=?, `nombre`=? WHERE `idusuario`=?");
		$this->db->bindP(1,$data['fechaN']);
		$this->db->bindP(2,$data['nombre']);
		$this->db->bindP(3,$data['idusuario']);
		$this->db->execute();
	}
	public function actualizarA($data){
		$this->db->query("UPDATE `alquiler` SET `estado_idestado`=? WHERE `id_alquiler`=?");
		$this->db->bindP(1,$data['estado_idestado']);
		$this->db->bindP(2,$data['id_alquiler']);
		$this->db->execute();
	}

	public function alquilerCliente($data){
		$this->db->query("SELECT * FROM `alquiler` INNER JOIN usuario ON alquiler.usuario_idcliente=usuario.idusuario WHERE `usuario_idcliente`=?");
		$this->db->bindP(1,$data);
		$this->db->execute();		
		return $this->db->show();
	}
	public function alquileresCliente($data){
		$this->db->query("SELECT * FROM `alquiler` INNER JOIN usuario ON alquiler.usuario_idcliente=usuario.idusuario WHERE `usuario_idcliente`=?");
		$this->db->bindP(1,$data);
		$this->db->execute();		
		return $this->db->showAll();
	}
	public function morosos(){
		$this->db->query("SELECT * FROM `alquiler` INNER JOIN estado ON alquiler.estado_idestado=estado.idestado");
		$this->db->execute();		
		return $this->db->showAll();
	}
	public function morososI(){
		$this->db->query("SELECT * FROM `alquiler` INNER JOIN estado ON alquiler.estado_idestado=estado.idestado WHERE estado_idestado=2");
		$this->db->execute();		
		return $this->db->showAll();
	}
}

 ?>