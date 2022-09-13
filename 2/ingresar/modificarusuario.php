<html>

<head>
    <title>Problema</title>
</head>

<body>

   <?php
   $conexion = mysqli_connect("localhost", "root", "", "practica") or
       die("Problemas con la conexión");

   $registros = mysqli_query($conexion, "update usuarios
                        set codigo_curso    =$_REQUEST[Codigo], 
                        nombre = '$_REQUEST[nombreViejo]', 
                        mail = '$_REQUEST[emailViejo]'
                       where mail='$_REQUEST[mailviejo]'") or
       die("Problemas en el select:" . mysqli_error($conexion));
  
   
   echo "El curso fue modificado con exito";
   ?>

</body>

</html>