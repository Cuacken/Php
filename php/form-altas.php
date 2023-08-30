<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Altas</title>
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/formAltas.css">
</head>


	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">


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
		<h3 class="altaTitulo">FORMULARIO DE ALTA</h3>
		</div>
			<form class="altaInput" action="altas.php" method="POST" enctype="multipart/form-data">

				<div class="grupoTexto">
					<label for="usuario">Nombre de Usuario:</label>
					<label for="nombre">Nombre:</label>
					<label for="apellido">Apellido:</label>
					<label for="edad">Edad:</label>
					<label for="foto">Foto de Perfil:</label>
				</div>
				<div class="grupoInputs">
					<input type="text" name="usuario">
					<input type="text" name="nombre">
					<input type="text" name="apellido">
					<input type="number" name="edad">
					<input type="file" name="foto">
					<input type="submit" value="Grabar">
				</div>

			</form>
		</div>
	</div>


</body>

</html>