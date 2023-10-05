
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



$user = $_POST['usuario'];
$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

// salida de informacion

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
	print "Se ha insertado el registro"."<br>";
	print "<a class='btn' href='../formularios/form-altas.php'>Volver</a>
	<style>
		body{
			display: flex;
			justify-content: center;
			margin: 0;
    		padding: 0;
    		background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(128,252,212,1) 100%);
			margin: 220px;
			font-size: 30px;
		}
		.btn{
			color: rgb(214, 135, 214);
    		background-color: black;
			height: 30px;
		}
	</style>";

}else{
	print "No se ha podido generar el registro"."<br>";
	print "<a class='btn' href='../formularios/form-altas.php'>Volver</a>
	<style>
		body{
			display: flex;
			justify-content: center;
			margin: 0;
    		padding: 0;
    		background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(128,252,212,1) 100%);
			margin: 220px;
			font-size: 30px;
		}
		.btn{
			color: rgb(214, 135, 214);
    		background-color: black;
			height: 30px;
		}
	</style>";

}

}
else
print "No se puede subir el archivo";

 ?>
