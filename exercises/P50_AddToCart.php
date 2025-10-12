<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class P50_AddToCart {
    public function main(): void {
        // Write your code here

        // Guardamos en la variable el valor de formulario tipo GET
        $item = trim($_GET['item'] ?? '');
        
        // Iniciamos el carrito de la compra si no está iniciado
        // Aseguramos que $_SESSION['cart'] sea un array, aunque esté vacía
        if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        //Comprobamos si haya no está vacío el valor del formulario tipo GET
        if (!empty($item)) {
            //Si no está vacío añadimnos el valor al carrito de la compra
            $_SESSION['cart'][] = $item;
        }

        //Imprimos el carrito de la compra, convirtiendo el array en una cadena de texto con separador, para que sea más legible
        $cartContents = implode(",", $_SESSION['cart']);
        echo $cartContents . "\n"; 
    }
}
