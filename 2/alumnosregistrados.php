<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios registrados</title>
</head>
<body style="text-align:center">
<?php
  $conexion = mysqli_connect("localhost", "root", "", "practica") or
    die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select count(*) as cantidad from usuarios") or
    die("Problemas en el select:" . mysqli_error($conexion));
  $reg = mysqli_fetch_array($registros);
  echo "La cantidad de usuarios inscriptos son :" . $reg['cantidad']; 
    echo "<br>","<br>";


  


    
  $registros = mysqli_query($conexion, "select cur.nombre as  nombrecurso, mail, codigo_curso, usu.nombre 
from usuarios as usu
inner join cursos as cur on cur.codigo=usu.codigo_curso") or
        die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    echo "Nombre:" . $reg['nombre'] . "<br>";
    echo "Mail:" . $reg['mail'] . "<br>";
    echo "Curso:" . $reg['nombrecurso'] . "<br>";
    echo "<hr>";
  }
  mysqli_close($conexion);
  ?>
<br>
<a href="http://localhost/2/">HOME
</body>
</html>