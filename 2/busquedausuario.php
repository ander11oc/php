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
    <form action="busquedausuario2.php" method="post">
      <input type="hidden" name="mailviejo" value="<?php echo $regalu['mail'] ?>">
      Cambiar nombre:
      <input type="text" name= "nombreViejo" value="<?php echo $regalu['nombre'] ?>" ><br>
      Cambiar Email:
      <input type="text" name= "emailViejo" value="<?php echo $regalu['mail'] ?>" ><br>
      <select name="Codigo">
        <?php
          $registros = mysqli_query($conexion, "select * from cursos") or
            die("Problemas en el select:" . mysqli_error($conexion));
          while ($reg = mysqli_fetch_array($registros)) {
            if ($regalu['CodigoCurso'] == $reg['Codigo'])
              echo "<option value=\"$reg[Codigo]\" selected>$reg[nombre]</option>";
            else
              echo "<option value=\"$reg[Codigo]\">$reg[nombre]</option>";
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
  <a href="buscarAlumno.php">Buscar otro alumno</a>
  <br>
  <br>
    
</body>

</html>