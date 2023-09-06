
<html lang="es">
	<head>
	<link rel="stylesheet" href="css/altaBajaModificacion.css">
	</head>
</html>
<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">

<?php 

include 'menu.php';

$user = $_POST['usuario'];
$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

// salida de informacion

echo "<h3>".$ape."</h3>". "<h3>".$nom."</h3>". "<h3>".$ed."</h3>";
var_dump($foto);
if($fotoTamanio != 0)
{
	$fp = fopen($foto,"rb");
	$contenido = fread($fp,$fotoTamanio);
	$contenido = addslashes($contenido);
	fclose($fp);

	$base = "gestion";
$Conexion =  mysqli_connect("localhost","root","",$base);

$cadena= "INSERT INTO persona(usuario, apellido, nombre, edad,foto) VALUES ('$user','$ape','$nom','$ed','$contenido')";

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	print "se ha insertado un registro"."<br>";

}else{
	print "NO se ha generado un registro"."<br>";
}

}
else
print "No se puede subir el archivo";

 ?>
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
 </body>