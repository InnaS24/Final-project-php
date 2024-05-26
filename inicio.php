<html> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Registrar Usuario</title> 
    <style> 
        body { 
            font-family: Arial, sans-serif; 
            background-color: #f9f9f9; 
            background-size: cover; 
            background-position: center; 
            margin: 0; 
            padding: 0; 
        } 
        h2 { 
            text-align: center; 
            margin-top: 50px; 
        } 
        form { 
            text-align: center; 
            margin-top: 20px; 
        } 
        label { 
            display: block; 
            margin-top: 10px; 
        } 
        input { 
            padding: 8px; 
            margin-top: 5px; 
            width: 200px; 
        } 
        input[type="submit"] { 
            margin-top: 20px; 
            padding: 10px 20px; 
            background-color: #007bff; 
            color: #fff; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
        } 
        input[type="submit"]:hover { 
            background-color: #0056b3; 
        } 
    </style> 
</head> 
<body> 
    <h2>Registrar Usuario</h2> 
    <form action="procesar_registro.php" method="POST"> 
        <label for="correo">Correo Electrónico:</label><br> 
        <input type="email" id="correo" name="correo" required><br> 
 
        <label for="contrasena">Contraseña:</label><br> 
        <input type="password" id="contrasena" name="contrasena" required><br> 
 
        <input type="submit" value="Registrar"> 
    </form> 
 
   
</body> 
</html> 

