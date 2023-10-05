<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">

<html lang="es">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Altas</title>
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
				<li><a href="../formularios/form-altas.php"><img src="../../img/subida.png" alt="Altas"></a></li>
				<li><a href="../formularios/form-bajas.php"><img src="../../img/bajada.png" alt="Bajas"></a></li>
				<li><a href="../formularios/form-modificacion.php"><img src="../../img/editar.png" alt="Modificaciones"></a></li>
				<li><a href="listar.php"><img src="../../img/lista.png" alt="Listado"></a></li>
			</ul>
		</nav>

	<h3 class="altaTitulo">LISTADO DE REGISTROS</h3>

	<table class="tabla">
		<thead class="ttitulo">
			<tr>
			<th>ID</th>
			<th>N. Usuario</th>
			<th>Apellido</th>
			<th>Nombre</th>
			<th>Edad</th>
			<th>Foto</th>
			</tr>
		</thead>
	<?php 

$base = "gestion";
$Conexion =  mysqli_connect("localhost","root","",$base);

$cadena= "SELECT * FROM persona ";

$consulta = mysqli_query($Conexion,$cadena);

while(  $registro = mysqli_fetch_row($consulta)   ){
	echo "<tr class='trmain'>";
	echo "<th>".$registro[0]."</th>"."<th>".$registro[1]."</th>"."<th>".$registro[2]."</th>"."<th>".$registro[3]."</th>"."<th>".$registro[4]."</th><th><img src='data:image/jpeg;base64,".base64_encode($registro[5])."' width='200px'/></th>";
	echo "</tr>";
}
 ?>
    </table>
	</body>
</html>




