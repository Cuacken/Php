<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Modificacion</title>
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/formAltas.css">
</head>
<body>
<div class="header">
		<h3 class="titulo">Menu General</h3>
	</div>
	<div class="container">
		<nav class="menu">
			<ul>
				<li><a href="form-altas.php"><img src="../img/subida.png" alt="Altas"></a></li>
				<li><a href="form-bajas.php"><img src="../img/bajada.png" alt="Bajas"></a></li>
				<li><a href="form-modificacion.php"><img src="../img/editar.png" alt="Modificaciones"></a></li>
				<li><a href="listar.php"><img src="../img/lista.png" alt="Listado"></a></li>
			</ul>
		</nav>
		<div class="form">
		<div>
		<h3 class="altaTitulo">FORMULARIO DE MODIFICACION</h3>
		</div>
	<form class="altaInput" action="modificacion.php" method="POST" enctype="multipart/form-data">
<div class="grupoInputs">
		<div class="grupoTexto">
				<label for="usuario">Usuario a modificar:</label>
				<input type="text" name="usuario"><br>
		</div>
		<h3 for="#">Campos a modificar:</h3><br>
		<div class="grupoTexto">
				
					<label for="nombre">Nombre:</label>
					<input type="text" name="nombre">
		</div>
		<div class="grupoTexto">
					<label for="apellido">Apellido:</label>
					<input type="text" name="apellido">
		</div>
		<div class="grupoTexto">
					<label for="edad">Edad:</label>
					<input type="number" name="edad">
		</div>
					<label for="foto">Foto de Perfil:</label>
					<input type="submit" value="Grabar">
				
					</div>
	</form>
	
</body>
</html>