<html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar usuario</title>
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
  <form action="ingresar/buscarusuario.php" method="post">
    Ingrese el mail del usuario:
    <br>
    <input type="text" style="width : 1000px" name="mail" ><br>
    <input type="submit" value="buscar">
    
  </form>
  
</body>

</html>