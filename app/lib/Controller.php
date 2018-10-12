<?php 

/**
 * 
 */
class Controller
{
	// llamar vista
	 public function view($view, $data=[], $title= '')
	 {
	 	require_once '../app/views/all/header.php';
	 	require_once '../app/views/'.$view.'.php';
	 	require_once '../app/views/all/footer.php';
	 }
	 public function viewIntern($cabecera, $view, $data=[], $title= '')
	 {
		require_once '../app/views/all/header.php';
		require_once '../app/views/'.$cabecera.'.php';
	 	require_once '../app/views/'.$view.'.php';
	 	require_once '../app/views/all/footer.php';
	 }
	 // llamar modelo
	 public function model($model)
	 {
	 	$model=ucwords($model).'Model';
	 	require_once '../app/models/'.$model.'.php';
	 	return new $model();
	 }

}
 ?>