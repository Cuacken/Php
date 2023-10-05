
<html lang="es">
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
$foto = $_FILES['foto']['tmp_name'];
$fotoTamanio = $_FILES['foto']['size'];

if($fotoTamanio != 0){
	$fp = fopen($foto,"rb");
	$contenido = fread($fp,$fotoTamanio);
	$contenido = addslashes($contenido);
	fclose($fp);

$base = "gestion";
$Conexion =  mysqli_connect("localhost","root","",$base);
if($Conexion){
	echo "la conexion fue exitosa "."<br>";

}else{
	echo "la conexion ha fallado "."<br>";
}

$cadena = "UPDATE  persona SET apellido = '$ape', nombre = '$nom', edad = '$ed', foto = '$contenido' WHERE usuario = '$user'";

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	echo "Se ha modificado el registro"."<br>";
	echo "<a class='btn' href='../formularios/form-modificacion.php'>Volver</a>
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
else{
	echo "No se ha podido modificar el registro"."<br>";
	echo "<a class='btn' href='../formularios/form-modificacion.php'>Volver</a>
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
	echo mysqli_error($Conexion);
}
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
</html>