
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
	print "<div>Se ha insertado el registro correctamente</div>"."<p>";
	print "<a class='btn' href='../formularios/form-altas.php'>ㅤVolverㅤ</a>
	<style>
		body{
			font-family: sans-serif;
			display: flex;
			margin: 0;
    		padding: 0;
    		background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(128,252,212,1) 100%);
			margin: 220px;
			font-size: 30px;
			color: black;
			flex-direction: column;
			justify-content: center;
			align-content: space-around;
			align-items: center;
		}
		.btn{
			text-decoration: none;
			border-radius: 50px;
			border-width: 3px;
			border-style: solid;
			border-color: #767676;
			background-color: white;
			width: fit-content;
		}
	</style>";

}else{
	print "<div>No se ha podido generar el registro</div>"."<p>";
	print "<a class='btn' href='../formularios/form-altas.php'>ㅤVolverㅤ</a>
	<style>
	body{
		font-family: sans-serif;
		display: flex;
		margin: 0;
		padding: 0;
		background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(128,252,212,1) 100%);
		margin: 220px;
		font-size: 30px;
		color: black;
		flex-direction: column;
		justify-content: center;
		align-content: space-around;
		align-items: center;
	}
	.btn{
		text-decoration: none;
		border-radius: 50px;
		border-width: 3px;
		border-style: solid;
		border-color: #767676;
		background-color: white;
		width: fit-content;
	}
	</style>";

}

}
else
print "No se puede subir el archivo";

 ?>
