<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos registrados</title>
 <!--Import Google Icon Font-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
</head>

<body style="text-align:center">
<nav>
        <div class="nav-wrapper">
          <a href="http://localhost/ANDERSON/2/" class="brand-logo right">HOME</a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="ingresar/ingresarusuario.php">Ingresar Usuario</a></li>
            <li><a href="ingresar/ingresarcurso.php">Ingresar Curso</a></li>
            <li><a href="usuariosregistrados.php">Usuarios Registrados</a></li>
            <li><a href="cursosregistrados.php">Cursos Registrados</a></li>
            <li><a href="buscarusuario.php">Buscar Usuario</a></li>
<li><a href="paginacion.php">Paginacion Usuario/cursos</a></li>
<li><a href="hipervinculos.php">Hipervinculos</a></li>
<li><a href="upload.php">Subir archivo</a></li>
<li><a href="color.php">Cambiar color</a></li>
          
          </ul>
        </div>
      </nav>
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


 <!--JavaScript at end of body for optimized loading-->
 <script type="text/javascript" src="js/materialize.min.js"></script>    
</body>
</html>