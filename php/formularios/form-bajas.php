<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Bajas</title>
	<link rel="stylesheet" href="../../css/menu.css">
	<link rel="stylesheet" href="../../css/formAltas.css">
</head>
<body>
	
<div class="header">
		<h3 class="titulo">Menu General</h3>
	</div>
	<div class="container">
		<nav class="menu">
			<ul>
				<li><a href="form-altas.php"><img src="../../img/subida.png" alt="Altas"></a></li>
				<li><a href="form-bajas.php"><img src="../../img/bajada.png" alt="Bajas"></a></li>
				<li><a href="form-modificacion.php"><img src="../../img/editar.png" alt="Modificaciones"></a></li>
				<li><a href="../funciones/listar.php"><img src="../../img/lista.png" alt="Listado"></a></li>
			</ul>
		</nav>
	<div class="form">
		<div>
			<h3 class="altaTitulo">FORMULARIO DE BAJAS</h3>
		</div>
	<form class="altaInput" action="../funciones/bajas.php" method="POST" >
		<div class="labelgroup">
		<div class="labelInput">
                <label for="usuario">Nombre de Usuario:</label>
                <input class="labelInput" type="text" name="usuario" required>
				</div>
            <input type="submit" value="Grabar">
            </div>  
            </div>
	</form>
	
</body>
</html>