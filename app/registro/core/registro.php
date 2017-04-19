<?php

require_once 'conect.php';

$conect = new Conect();

if ($_POST != null) {
	$user = $_POST['user'];
	$pass = md5($_POST['pass']);
	$email = $_POST['email'];
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];

	$sql = "INSERT INTO usuario (idusuario,usuario,clave,correo,nombre,apellidos) VALUES('','$user','$pass','$email','$name','$lastname')";

	$dato = $conect->prepare($sql);
	$dato->execute();

	header("location:../");
}else {
	echo 'no se ingreso ningun dato';# code...
}




?>