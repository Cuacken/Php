
<html lang="es">
</html>

<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">
<?php 

include 'menu.php';


$user = $_POST['usuario'];

$base = "gestion";
$Conexion =  mysqli_connect("localhost","root","",$base);
if($Conexion){
	echo "la conexion fue exitosa "."<br>";

}else{
	echo "la conexion ha fallado "."<br>";
}

$cadena= "DELETE FROM persona  WHERE usuario = '$user'";  

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	echo "se ha eliminado un registro"."<br>";

}else{
	echo "NO se ha eliminado un registro"."<br>";
	echo mysqli_error($Conexion);
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<a href="form-bajas.php">Volver</a>
	
</body>
</html>