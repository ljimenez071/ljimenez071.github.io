<?php
session_start();

 // Consulta la base de datos o utiliza una matriz de productos para obtener los detalles del producto según el $product_id
 $products = array(
    1 => array(
        'name' => 'Producto 1',
        'description' => 'Descripción del Producto 1.',
        'price' => 19.99,
        'image' => 'imagenes/producto1.jpg'
    ),
    2 => array(
        'name' => 'Producto 2',
        'description' => 'Descripción del Producto 2.',
        'price' => 29.99,
        'image' => 'imagenes/producto2.jpg'
    ),
    // Puedes agregar más productos siguiendo la misma estructura
);

// Verifica si se ha enviado un producto para agregar al carrito
if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

        // Verifica si el producto existe en la matriz de productos
        if (isset($products[$product_id])) {
            $product_details = $products[$product_id];
            $product_name = $product_details['name'];
            $product_description = $product_details['description'];
            $product_price = $product_details['price'];
            $product_image = $product_details['image'];

            // Ahora puedes utilizar $product_name, $product_description, $product_price, $product_image para mostrar los detalles del producto o agregarlo al carrito.
        }

   

    // Agrega el producto al carrito en una sesión
    $_SESSION['cart'][$product_id] = 1;
}

// Redirige de vuelta a la página de productos
header('Location: index.php');
?>
