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
          <a href="#" class="brand-logo right">Logo</a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="ingresar/ingresarusuario.php">Ingresar Usuario</a></li>
            <li><a href="ingresar/ingresarcurso.php">Ingresar Curso</a></li>
            <li><a href="alumnosregistrados.php">Usuarios Registrados</a></li>
            <li><a href="cursosregistrados.php">Cursos Registrados</a></li>
            <li><a href="buscarusuario.php">Buscar Usuario</a></li>
          
          </ul>
        </div>
      </nav>




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

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>  
</body>
</html>