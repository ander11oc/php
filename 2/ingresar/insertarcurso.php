<?php

$conexion = mysqli_connect("localhost","root","","practica") or
die ("Problemas de conexion");

mysqli_query($conexion,"INSERT INTO cursos(nombre) values ('$_REQUEST[nombre_curso]') ") or die ("problemas en el query".mysqli_error($conexion));

mysqli_close($conexion);

echo"CURSO INGRESADO.";

?>
<br>
<br>
<a href="ingresarcurso.php">INGRESAR OTRO CURSO</a>
<br>
<br>
<a href="http://localhost/anderson/2/">HOME