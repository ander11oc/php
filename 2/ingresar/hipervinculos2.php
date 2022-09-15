<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hipervinculos 2</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
</head>
<body>
  <nav>
        <div class="nav-wrapper">
          <a href="http://localhost/ANDERSON/2/" class="brand-logo right">HOME</a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="ingresarusuario.php">Ingresar Usuario</a></li>
            <li><a href="ingresarcurso.php">Ingresar Curso</a></li>
            <li><a href="../usuariosregistrados.php">Usuarios Registrados</a></li>
            <li><a href="../cursosregistrados.php">Cursos Registrados</a></li>
            <li><a href="../buscarusuario.php">Buscar Usuario</a></li>
            <li><a href="../paginacion.php">Paginacion Usuario/cursos</a></li>
            <li><a href="../hipervinculos.php">Hipervinculos</a></li>
            <li><a href="../upload.php">Subir archivo</a></li>
          </ul>
        </div>
      </nav>
      
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "practica") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select nombre from usuarios where codigo_curso=$_REQUEST[codigo]") or
    die("Problemas en el select:" . mysqli_error($conexion));

  echo "Alumnos inscriptos a dicho curso<br>";
  while ($reg = mysqli_fetch_array($registros)) {
    echo $reg['nombre'] . " - ";
  }

  mysqli_close($conexion);
  ?>
    <script type="text/javascript" src="js/materialize.min.js"></script>    
</body>

</html>