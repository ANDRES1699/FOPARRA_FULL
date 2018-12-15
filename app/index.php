<?php 
// llamar al config y utilizar el spl utopload para requerir todos los archivos
require_once 'config/config.php';
require_once '../app/models/UsuarioModel.php';
require_once 'librerias\fpdf\WriteHTML.php';
	spl_autoload_register(function($archivo)
	{
		require_once '../app/lib/'.$archivo.'.php';
	});
?>
