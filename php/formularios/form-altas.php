<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/formAltas.css">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="icon" href="6501050.png">
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
        <h3 class="altaTitulo">FORMULARIO DE ALTAS</h3>
        </div>
            <form class="altaInput" action="../funciones/altas.php" method="POST" enctype="multipart/form-data">
            <div class="labelgroup">

            <div class="labelInput">
                <label for="usuario">Nombre de Usuario:</label>
                <input class="labelInput" type="text" name="usuario" required>
            </div>


            <div class="labelInput">
            <label for="nombre">Nombre:</label>
            <input  class="labelInput"     type="text" name="nombre" required>
            </div>

            <div class="labelInput">
            <label for="apellido">Apellido:</label>
            <input  class="labelInput"  type="text" name="apellido" required>
            </div>

            <div class="labelInput">
            <label for="edad">Edad:</label>
            <input   class="labelInput"  type="number" name="edad" required>
            </div>

            <div class="labelInput">
            <label for="foto">Foto:</label>
            <input class="inputfile" type="file" name="foto" style="display: none" required>
            <label id="miBoton">Selecciona un archivo</label>
            </div>
            <input type="submit" value="Grabar">
            </div>  
            </div>
            <script>
                let miBoton = document.getElementById("miBoton");
                miBoton.addEventListener('click', (e) => {
                    console.dir(e.target.previousElementSibling);
               e.target.previousElementSibling.click();
             });
            </script>

            </form>
        </div>
    </div>
	
</body>

</html>