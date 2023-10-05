
<html lang="es">
</html>

<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">
<?php 

$user = $_POST['usuario'];

$base = "gestion";
$Conexion =  mysqli_connect("localhost","root","",$base);
if($Conexion){
	echo "Lla conexion fue exitosa! "."<br>";

}else{
	echo "La conexion ha fallado. "."<br>";
}

$cadena= "DELETE FROM persona  WHERE usuario = '$user'";  

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	echo "Se ha eliminado el registro"."<br>";
	echo "<a class='btn' href='../formularios/form-bajas.php'>Volver</a>
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
			text-decoration:none;
		}
	</style>";

}
else{
	echo "No se ha podido eliminar el registro"."<br>";
	echo "<a class='btn' href='../formularios/form-bajas.php'>Volver</a>
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

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
</html>