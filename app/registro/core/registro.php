<?php

require_once '../../../core/conect.php';

$conect = new Conect();


if ($_POST != null) {
	$user = $_POST['user'];
	$pass = md5($_POST['pass']);
	$email = $_POST['email'];
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];

	$st = $conect->prepare("SELECT * FROM usuario WHERE usuario=:usuario"); 
	$st->bindParam("usuario", $user,PDO::PARAM_STR);
	$st->execute();
	$count=$st->rowCount();
 
 	if($count<1){

 		$st1 = $conect->prepare("SELECT * FROM usuario WHERE correo=:email"); 
		$st1->bindParam("email", $email,PDO::PARAM_STR);
		$st1->execute();
		$count1=$st1->rowCount();
 		
 		if ($count1<1) {
 			$sql = "INSERT INTO usuario (idusuario,usuario,clave,correo,nombre,apellidos) VALUES('','$user','$pass','$email','$name','$lastname')";

			$dato = $conect->prepare($sql);
			$dato->execute();
		}else{
			echo "Esta direccion de correo ya esta registrada, intente con otra";
		}
	}else {
		echo "Usuario Ya existe, intente con otro";
	}

	echo "Registro Exitoso";


	header("location:../");
}else {
	echo 'no se ingreso ningun dato';# code...
}




?>