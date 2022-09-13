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

    $registros = mysqli_query($conexion, "select count(*) as cantidad from cursos") or
    die("Problemas en el select:" . mysqli_error($conexion));
  $reg = mysqli_fetch_array($registros);
  echo "La cantidad de cursos inscriptos son :" . $reg['cantidad'];
  echo "<br>","<br>";


  echo "<hr>","<hr>";
    $registros2 = mysqli_query($conexion," SELECT * FROM cursos")
    or die ("problemas en el query".mysqli_error($conexion));

    while ($reg=mysqli_fetch_array($registros2))
    { 
        echo "Codigo: ".$reg['codigo']."<br>";
        echo "Nombre: ".$reg['nombre']."<br>";
        
        echo "<hr>";

    }

    echo "<hr>","<hr>";

    $registros3 = mysqli_query($conexion, "select count(alu.codigo_curso) as cantidad,
    cur.nombre as nombrecurso 
  from usuarios as alu
  right join cursos as cur on cur.codigo=alu.codigo_curso
  group by alu.codigo_curso") or
  die("Problemas en el select:" . mysqli_error($conexion));
  while ($reg3 = mysqli_fetch_array($registros3)) {
  echo "Nombre del curso:" . $reg3['nombrecurso'] . "<br>";
  echo "Cantidad de inscriptos:" . $reg3['cantidad'] . "<br>";
  echo "<hr>";
    }

 
mysqli_close($conexion);
?>

   
<br>
<a href="http://localhost/2/">HOME
</body>
</html>