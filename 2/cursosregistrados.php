<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos registrados</title>
</head>
<body style="text-align:center">
    <?php

    $conexion = mysqli_connect("localhost","root","","practica") or
    die ("Problemas de conexion");

    $registros = mysqli_query($conexion," SELECT * FROM cursos")
    or die ("problemas en el query".mysqli_error($conexion));

    while ($reg=mysqli_fetch_array($registros))
    { 
        echo "Codigo: ".$reg['codigo']."<br>";
        echo "Nombre: ".$reg['nombre']."<br>";
        
        echo "<hr>";

    }



    mysqli_close($conexion);


?>
<br>
<a href="http://localhost/anderson/2/">HOME
</body>
</html>