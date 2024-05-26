<html> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Tienda de Alimentos para Mascotas</title> 
    <style> 
        body { 
            font-family: Arial, sans-serif; 
        } 
        .product { 
            border: 1px solid #ccc; 
            padding: 16px; 
            margin: 16px; 
            display: inline-block; 
            width: 200px; 
            text-align: center; 
        } 
        .product img { 
            max-width: 100%; 
            height: auto; 
        } 
        .cart { 
            position: fixed; 
            top: 10px; 
            right: 10px; 
            border: 1px solid #ccc; 
            padding: 16px; 
            background: #fff; 
        } 
    </style> 
</head> 
<body> 
    <h1>Tienda de Alimentos para Mascotas</h1> 
    <div class="products"> 
        <div class="product"> 
            <img src="photo/dry-dog-food.jpg" alt="Comida seca para perros"> 
            <h2>Comida seca para perros</h2> 
            <p>Precio: €80</p> 
            <form action="" method="POST"> 
                <input type="hidden" name="product_id" value="80"> 
                <input type="hidden" name="product_name" value="Comida seca para perros"> 
                <input type="hidden" name="product_price" value="80"> 
                <input type="submit" name="add_to_cart" value="Agregar al carrito"> 
            </form> 
        </div> 
        <div class="product"> 
            <img src="photo/wet-dog-food.jpg" alt="Comida húmeda para perros"> 
            <h2>Comida húmeda para perros</h2> 
            <p>Precio: €20</p> 
            <form action="" method="POST"> 
                <input type="hidden" name="product_id" value="20"> 
                <input type="hidden" name="product_name" value="Comida húmeda para perros"> 
                <input type="hidden" name="product_price" value="20"> 
                <input type="submit" name="add_to_cart" value="Agregar al carrito"> 
            </form> 
        </div> 
        <div class="product"> 
            <img src="photo/dry-cat-food.jpg" alt="Comida seca para gatos"> 
            <h2>Comida seca para gatos</h2> 
            <p>Precio: €55</p> 
            <form action="" method="POST"> 
                <input type="hidden" name="product_id" value="55"> 
                <input type="hidden" name="product_name" value="Comida seca para gatos"> 
                <input type="hidden" name="product_price" value="55"> 
                <input type="submit" name="add_to_cart" value="Agregar al carrito"> 
            </form> 
        </div> 
        <div class="product"> 
            <img src="photo/wet-cat-food.jpg" alt="Comida húmeda para gatos"> 
            <h2>Comida húmeda para gatos</h2> 
            <p>Precio: €10</p> 
            <form action="" method="POST"> 
                <input type="hidden" name="product_id" value="10"> 
                <input type="hidden" name="product_name" value="Comida húmeda para gatos"> 
                <input type="hidden" name="product_price" value="10"> 
                <input type="submit" name="add_to_cart" value="Agregar al carrito"> 
            </form> 
        </div> 
    </div> 
 
    <div class="cart"> 
        <h2>Carrito de Compras</h2> 
        <?php 
        session_start(); 
 
        if (isset($_POST['add_to_cart'])) { 
            $product_id = $_POST['product_id']; 
            $product_name = $_POST['product_name']; 
            $product_price = $_POST['product_price']; 
 
            if (!isset($_SESSION['cart'])) { 
                $_SESSION['cart'] = []; 
            } 
 
            $_SESSION['cart'][] = [ 
                'product_id' => $product_id, 
                'product_name' => $product_name, 
                'product_price' => $product_price 
            ]; 
        } 
 
        if (isset($_POST['remove_from_cart'])) { 
            $product_id = $_POST['product_id']; 
 
            foreach ($_SESSION['cart'] as $key => $item) { 
                if ($item['product_id'] == $product_id) { 
                    unset($_SESSION['cart'][$key]); 
                    break; 
                } 
            } 
        } 
 
        $total_price = 0; 
        if (isset($_SESSION['cart'])) { 
            foreach ($_SESSION['cart'] as $item) { 
                $total_price += $item['product_price']; 
            } 
        } 
 
        if (isset($_SESSION['cart'])) { 
            foreach ($_SESSION['cart'] as $item) { 
                echo '<li>' . $item['product_name'] . ' - €' . $item['product_price'] . ' <form action="" method="POST">   
                <input type="hidden" name="product_id" value="' . $item['product_id'] . '">   
                <input type="submit" name="remove_from_cart" value="Eliminar del carrito">   
            </form></li>'; 
            } 
        } 
        ?> 
        <p>Total: €<?php echo number_format($total_price, 2); ?></p> 
    </div> 
    <script> 
        window.onload = function() { 
            window.addEventListener('beforeunload', function(e) { 
                if (confirm('¿Desea vaciar el carrito al recargar la página?')) { 
                    // Clear the cart 
                  
                } 
            }); 
        }; 
    </script> 
</body> 
</html> 
  