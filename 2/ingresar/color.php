<?php
if ($_REQUEST['radio'] == "rojo")
  setcookie("color", "#ff0000", time() + 60 * 60 * 24 * 365, "/");
elseif ($_REQUEST['radio'] == "verde")
  setcookie("color", "#00ff00", time() + 60 * 60 * 24 * 365, "/");
elseif ($_REQUEST['radio'] == "azul")
  setcookie("color", "#0000ff", time() + 60 * 60 * 24 * 365, "/");
?>
<html>

<head>
  <title>Cambio color</title>
</head>

<body <?php if (isset($_COOKIE['color'])) echo " style=\"background:$_COOKIE[color]\"" ?>>
  Se cambio el color.
  <br>
  <a href="http://localhost/ANDERSON/2/">Ir a la otra página</a>
</body>

</html>