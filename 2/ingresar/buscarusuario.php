<html>

<head>
  <title>Problema</title>
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
    <form action="http://localhost/2/ingresar/modificarusuario.php" method="post">
    Cambiar nombre:

      <input type="hidden" name="mailviejo" value="<?php echo $regalu['mail'] ?>">


      <input type="text" name= "nombreViejo" value="<?php echo $regalu['nombre'] ?>" ><br>


      <select name="codigocurso">
        <?php
          $registros = mysqli_query($conexion, "select * from cursos") or
            die("Problemas en el select:" . mysqli_error($conexion));
          while ($reg = mysqli_fetch_array($registros)) {
            if ($regalu['codigo_curso'] == $reg['Codigo'])
              echo "<option value=\"$reg[codigo]\" selected>$reg[nombre]</option>";
            else
              echo "<option value=\"$reg[codigo]\">$reg[nombre]</option>";
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
<a href="http://localhost/2/">HOME
</body>

</html>