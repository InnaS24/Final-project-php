<html>

<head> 
    <meta charset="utf-8"> 
    <title>Iniciar compras</title> 
    <style> 
        body { 
            font-family: Arial, sans-serif; 
            background-color: #f9f9f9; 
            background-image: url('photo/background2.jpg');
            background-repeat: no-repeat;
            background-position: center;
            margin: 0; 
            padding: 0; 
            text-align: center; 
        } 
        button { 
            padding: 10px 20px; 
            background-color: #007bff; 
            color: #fff; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            margin-top: 20px; 
        } 
        button:hover { 
            background-color: #0056b3; 
        } 
    </style> 

 <head>
  <meta charset="utf-8">
      <title>Iniciar compras
         </title>
 </head>
 <body>
  <form action="lista_compras.php" target="_blank">
   <button>Iniciar compras
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


$usuarios = $myPDO->query("SELECT correo_electronico, contrasena FROM usuarios");

?>


</html>