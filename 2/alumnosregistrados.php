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

    $registros = mysqli_query($conexion," SELECT * FROM usuarios")
    or die ("problemas en el query".mysqli_error($conexion));

    while ($reg=mysqli_fetch_array($registros))
    { 
        echo "Nombre: ".$reg['nombre']."<br>"."Correo: ".$reg['mail']."<br>";
        echo "Curso: ";
        switch ($reg ['codigo_curso'])
        { 
            case 1:
                echo "PHP";
            break;
            case 2:
                echo "HTML";
            break;
            case 3:
                echo "CSS";
            break;
    
        }
        echo "<hr>";

    }



    mysqli_close($conexion);


?>
<br>
<a href="http://localhost/anderson/2/">HOME
</body>
</html>