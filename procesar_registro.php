<html>


 <head>
  <meta charset="utf-8">
  <title>Кнопка</title>
 </head>
 <body>
  <form action="page/new.html" target="_blank">
   <button>START</button>
  </form>
 </body>


<?php

$myPDO = new PDO('sqlite:db/mydb.sq3');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo_electronico = $_POST['correo']; 
    $contrasena = $_POST['contrasena']; 

 
    $sql = "INSERT INTO usuarios (correo_electronico, contrasena) "
         . "VALUES (?, ?)";

   // echo $sql;
    $query = $myPDO->prepare($sql);
    $query->execute([$correo_electronico, $contrasena]);
}

// La siguiente consulta obtiene usuarios de la tabla `usuarios` en lugar de `concerts`
$usuarios = $myPDO->query("SELECT correo_electronico, contrasena FROM usuarios");

?>


</html>