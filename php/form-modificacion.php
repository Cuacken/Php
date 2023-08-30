<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">
<?php
include 'menu.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Modificacion</title>
	<link rel="stylesheet" href="css/formAltas.css">
</head>
<body>

<div class="container">
	<h3 class="altaTitulo">FORMULARIO DE MODIFICACION</h3>
	<form class="altaInput" action="modificacion.php" method="POST" >
	<div class="grupoInputs">
		<label for="usuario">Campo Clave Nombre de Usuario:</label>
		<input type="text" name="usuario"><br>	
    </div>

		<br><br>
		Campos a modificar:<br>

		<div class="grupoInputs">
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre"><br>
	    </div>

		<div class="grupoInputs">
		<label for="apellido">Apellido:</label>
		<input type="text" name="apellido"><br>
	    </div>

		<div class="grupoInputs">
		<label for="edad">Edad:</label>
		<input type="number" name="edad"><br>
	    </div>

		<div class="btn-submit">
		<input type="submit" value="Modificar"><br>
	    </div>
	</form>
</div>
	
</body>
</html>