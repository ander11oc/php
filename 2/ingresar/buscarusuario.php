<html>

<head>
  <title>Modificar</title>
</head>

<body>
<?php
  $conexion = mysqli_connect("localhost", "root", "", "practica") or
    die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select * from usuarios
    where mail='$_REQUEST[mail]'") or
die("Problemas en el select:" . mysqli_error($conexion));
if ($regalu = mysqli_fetch_array($registros)) {
?>
<form action="modificarusuario.php" method="post">
<input type="hidden" name="mailviejo" value="<?php echo $regalu['mail'] ?>">
Cambiar nombre:
<input type="text" name= "nombreViejo" value="<?php echo $regalu['nombre'] ?>" ><br>
Cambiar Email:
<input type="text" name= "emailViejo" value="<?php echo $regalu['mail'] ?>" ><br>
<select name="Codigo">


<?php
$registros2 = mysqli_query($conexion, "select * from cursos") or
die("Problemas en el select:" . mysqli_error($conexion));
while ($reg2 = mysqli_fetch_array($registros2)) {
if ($regalu2['codigo_curso'] == $reg['Codigo'])
echo "<option value=\"$reg2[Codigo]\" selected>$reg2[nombre]</option>";
else
echo "<option value=\"$reg2[Codigo]\">$reg2[nombre]</option>";
}
?>
</select>
<br>
<input type="submit" value="Modificar">
</form>
<?php
} else
echo "No existe alumno con dicho mail";
?>
<br>  
<br>
  <a href="http://localhost/2/buscarusuario.php">Buscar de nuevo</a>
  <br>
   <a href="http://localhost/2/index.html">Home</a>
</body>

</html>