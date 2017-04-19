<?php

require_once 'datos.php';
class Conect extends PDO
{
	private $tipo_bd;
	private $host;
	private $bd;
	private $user_bd;
	private $contra;

	function __construct()
	{
		$datos = new datos();

		try {
			parent::__construct($datos->getbdType().':host='.$datos->getbdHost().';dbname='.$datos->getbdName(), $datos->getbdUser(), $datos->getbdPass());
		} catch (PDOException $e) {
			echo 'Error de conexion. Detalle: ' . $e->getMessage();			
			exit;
		}
	}
}

$conexion = new Conect();
?>