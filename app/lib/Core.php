<?php 

/**
 * 
 */
session_start();
class Core
{
	private $c;
	private $m;
	public $p;

	function __construct()
	{
		// inicializar
		$this->c='index';
		$this->m='index';
		$this->p=[];
		// dividir

		$url = isset($_REQUEST['url']) ? explode('/', $_REQUEST['url']) : null ;
		// controlador
		if (isset($url[0])) {
			if (file_exists('../app/controllers/'.$url[0].'.php')) {
				$this->c=$url[0];
				unset($url[0]);
			}
		}
		$this->c=ucwords($this->c);
		require_once '../app/controllers/'.$this->c.'.php';
		$this->c=new $this->c();
		// método
		if (isset($url[1])) {
			if (method_exists($this->c, $url[1])){
				$this->m=$url[1];
				unset($url[1]);
			}
		}
		// echo $this->c;
		// echo $this->m;
		// llamar método de controlador
		$this->p=$url?array_values($url):[];
		if ($this->p!=null) {
			$_SESSION['p']=$this->p[0];
		}
		call_user_func_array([$this->c, $this->m], $this->p);
	}

}
 ?>