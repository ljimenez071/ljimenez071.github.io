<?php
session_start(); // Iniciar la sesión para mantener el carrito

// Verificar si se ha agregado un producto al carrito
if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    
    // Asegurarse de que $product_info sea siempre un arreglo
    $product_info = [];

    // Puedes agregar lógica para obtener información del producto (nombre, precio, etc.) desde una base de datos
    // y almacenarla en $product_info como un arreglo asociativo.
    $product_info['id'] = $product_id;
    $product_info['name'] = 'Desierto Sereno';
    $product_info['price'] = 100.00; // Precio del producto

    $product_info['id'] = $product_id;
    $product_info['name'] = 'Rincón Cactífico';
    $product_info['price'] = 100.00; // Precio del producto

    $product_info['id'] = $product_id;
    $product_info['name'] = 'Oasis Esmeralda';
    $product_info['price'] = 100.00; // Precio del producto

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Agregar el producto al carrito
    //$_SESSION['cart'][] = $product_info;
}
?>

<!-- Mostrar el contenido del carrito -->
<div id="cart">
    <?php if (!empty($_SESSION['cart']) && is_array($_SESSION['cart'])) : ?>
        <ul>
            <?php foreach ($_SESSION['cart'] as $item) : ?>
                <li><?php echo $item['name']; ?> - $<?php echo $item['price']; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>El carrito de compras está vacío.</p>
    <?php endif; ?>
</div>
