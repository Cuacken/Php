<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Altas</title>
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/formAltas.css">
</head>

<body>
	<div class="header">
		<h3 class="titulo">Menu General</h3>
	</div>
	<div class="container">

		<nav class="menu">
			<ul>
				<a href="form-altas.php">Alta</a>
				<a href="form-bajas.php">Bajas</a>
				<a href="form-modificacion.php">Modificaciones</a>
				<a href="listar.php">Listado</a>
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
					<label for="foto ">Foto de Perfil:</label>
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