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
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
</head>

<body style="text-align:center">
<nav>
        <div class="nav-wrapper">
          <a href="http://localhost/ANDERSON/2/" class="brand-logo right">HOME</a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="ingresarusuario.php">Ingresar Usuario</a></li>
            <li><a href="ingresarcurso.php">Ingresar Curso</a></li>
            <li><a href="../usuariosregistrados.php">Usuarios Registrados</a></li>
            <li><a href="../cursosregistrados.php">Cursos Registrados</a></li>
            <li><a href="../buscarusuario.php">Buscar Usuario</a></li>
          
          </ul>
        </div>
      </nav>
<h1 style="text-align:center">Ingresar Curso</h1>
<form action="insertarcurso.php" method="POST" style="text-align:center">

<div class="row" >
    <form class="col s12" >
      <div class="row">
        <div class="input-field col s6"  >
          <input placeholder="NOMBRE DEL CURSO" type="text" name ="nombre_curso" require >
          <input type="submit" value="REGISTRAR CURSO">
          <br>
          
         
        </button>
        </div>
      

    </div>
    </form>
</div>
 
</form>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>    
</body>
</html>