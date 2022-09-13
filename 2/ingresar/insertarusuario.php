<?php

$conexion = mysqli_connect("localhost","root","","practica") or
die ("Problemas de conexion");

mysqli_query($conexion,"
INSERT INTO usuarios(nombre,mail,codigo_curso) 
values 
('$_REQUEST[nombre]',
'$_REQUEST[email]',
'$_REQUEST[codigocurso]')")
 or die ("problemas en el query".mysqli_error($conexion));

mysqli_close($conexion);

echo"USUARIO INGRESADO.";

?>



      
<a href="ingresarusuario.php">INGRESAR OTRO ALUMNO</a>
<a href="http://localhost/2/">HOME
</a>