<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
</head>
<body>
	<h1>Registro</h1>
	<div id="form-box">
		<form action="core/registro.php" method="post">
			<input type="text" name="user" placeholder="Usuario" required>
			<input type="password" name="pass" placeholder="Contraseña" required>
			<input type="email" name="email" placeholder="Correo Electrónico" required>
			<input type="text" name="name" placeholder="Nombre" required>
			<input type="text" name="lastname" placeholder="Apellidos" required>
			<input type="submit" value="Registrar">
		</form>
	</div>
</body>
</html>