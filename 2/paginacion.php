<?php
if (isset($_REQUEST['pos']))
  $inicio = $_REQUEST['pos'];
else
  $inicio = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
</head>
<body>
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
            
  <?php


 

  $conexion = mysqli_connect("localhost", "root", "", "practica") or
    die("Problemas con la conexión");

    $paginacion = 3;


  $registros = mysqli_query($conexion, "select alu.codigo_curso, 

                                               alu.nombre as alumnonombre,
                                               mail,
                                               cur.codigo, 
                                               cur.nombre 
		                                      from usuarios as alu
                                          inner join cursos as cur on cur.codigo=alu.codigo_curso
                                          limit $inicio,$paginacion") or
    die("Problemas en el select:" . mysqli_error($conexion));
  $impresos = 0;
  while ($reg = mysqli_fetch_array($registros)) {
    $impresos++;
    echo "Nombre:" . $reg['alumnonombre'] . "<br>";
    echo "Mail:" . $reg['mail'] . "<br>";
    echo "Curso:" . $reg['nombre'] . "<br>";
    echo "<br>";
  }
  if ($inicio == 0)
    echo "anteriores ";
  else {
    $anterior = $inicio - $paginacion;
    echo "<a href=\"paginacion.php?pos=$anterior\">Anteriores </a>";
  }
  if ($impresos == $paginacion) {
    $proximo = $inicio + $paginacion;
    echo "<a href=\"paginacion.php?pos=$proximo\">Siguientes</a>";
  } else
    echo "siguientes";
  mysqli_close($conexion);

  /*______________________________*/

  $conexion2 = mysqli_connect("localhost", "root", "", "practica") or
  die("Problemas con la conexión");
  echo "<hr>";
$registros2 = mysqli_query($conexion2, "SELECT * FROM cursos limit $inicio,$paginacion") or
  die("Problemas en el select:" . mysqli_error($conexion2));
$impresos = 0;
while ($reg = mysqli_fetch_array($registros2)) {
  $impresos++;
  echo "Codigo:" . $reg['codigo'] . "<br>";
  echo "Nombre:" . $reg['nombre'] . "<br>";
  echo "<hr>";
}
if ($inicio == 0)
  echo "anteriores ";
else {
  $anterior = $inicio - $paginacion;
  echo "<a href=\"paginacion.php?pos=$anterior\">Anteriores </a>";
}
if ($impresos == $paginacion) {
  $proximo = $inicio + $paginacion;
  echo "<a href=\"paginacion.php?pos=$proximo\">Siguientes</a>";
} else
  echo "siguientes";
mysqli_close($conexion2);



  ?>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>    
</body>

</html>