
<html lang="es">
	<head>
	<link rel="stylesheet" href="css/altaBajaModificacion.css">
	</head>
</html>


<?php 

include 'menu.php';

$user = $_POST['usuario'];
$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];
$foto = $_FILES["foto"]["tmp_name"];
$tamañofoto = $_FILES ["foto"]["size"];

// salida de informacion

echo "<h3>".$user."</h3>". "<h3>".$ape."</h3>". "<h3>".$nom."</h3>". "<h3>".$ed."</h3>";


if($foto !="none"){
	$fp = fopen($foto,"rb");
	$contenido = fread($fp, $tamañofoto);
	$contenido = addslashes($contenido);
	fclose($fp);

$base = "gestion";
$Conexion =  mysqli_connect("localhost","root","",$base);

$cadena= "INSERT INTO persona(usuario, apellido, nombre, edad,foto) VALUES ('$user','$ape','$nom','$ed')";

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	echo "se ha insertado un registro"."<br>";

}else{
	echo "NO se ha generado un registro"."<br>";
}
}
 ?>
