<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar usuario</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
</head>
<body>



<h1 style="text-align:center">Ingresar Alumno</h1>
<form action="insertarusuario.php" method="POST" style="text-align:center">

<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="NOMBRE"  type="text" class="validate" name ="nombre" required>
      
        </div>
        <br>
      <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" class="validate" name ="email" placeholder="CORREO" required>
     
            </div>
      </div>
      <br>
      Seleccione el curso:
    <select name="codigocurso">
      <?php
      $conexion = mysqli_connect("localhost", "root", "", "practica") or
        die("Problemas con la conexión");

      $registros = mysqli_query($conexion, "select codigo,nombre from cursos") or
        die("Problemas en el select:" . mysqli_error($conexion));
      while ($reg = mysqli_fetch_array($registros)) {
        echo "<option value=\"$reg[codigo]\">$reg[nombre]</option>";
      }
      ?>
    </select>
    <br>
<br>
<br>
<br>  
  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>

</div>


</form>
<br>
<a href="http://localhost/ANDERSON/2/">HOME
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>    
</body>
</html>