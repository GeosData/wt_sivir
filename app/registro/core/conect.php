<?php


class Conect extends PDO
{
	private $tipo_bd = 'mysql';
	private $host = 'localhost';
	private $bd = 'wtbd_sivir';
	private $user_bd = 'wtu_sivir';
	private $contra = 'wtp_sivir';

	function __construct()
	{
		try {
			parent::__construct($this->tipo_bd.':host='.$this->host.';dbname='.$this->bd, $this->user_bd, $this->contra);
		} catch (PDOException $e) {
			echo 'Error de conexion. Detalle: ' . $e->getMessage();
			exit;
		}
	}
}
?>