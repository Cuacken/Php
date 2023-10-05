
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
	echo "La conexion fue exitosa! "."<br>";

}else{
	echo "La conexion ha fallado "."<br>";
}

$cadena = "UPDATE  persona SET apellido = '$ape', nombre = '$nom', edad = '$ed', foto = '$contenido' WHERE usuario = '$user'";

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	echo "<div>Se ha modificado el registro</div>"."<p>";
	echo "<a class='btn' href='../formularios/form-modificacion.php'>ㅤVolverㅤ</a>
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
else{
	echo "<div>No se ha podido modificar el registro</div>"."<p>";
	echo "<a class='btn' href='../formularios/form-modificacion.php'>ㅤVolverㅤ</a>
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