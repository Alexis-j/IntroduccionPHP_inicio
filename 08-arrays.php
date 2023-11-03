<?php include 'includes/header.php';


$carrito = ['Tablet', 'Television', 'Computadora'];

// Util para ver los contenidos de un arreglo
echo '<pre>';
var_dump($carrito);
echo '</pre>';

// Acceder a un elemento del arreglo
echo $carrito[1];

// anade un elemento en el indice 3 del arreglo
$carrito[3] = 'Nuevo Producto...';

//anadir un elemento al final del arreglo
array_push($carrito, 'Audifonos');

// anadir al inicio
array_unshift($carrito, 'Smartwatch');

// Util para ver los contenidos de un arreglo
echo '<pre>';
var_dump($carrito);
echo '</pre>';

$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');
echo '<pre>';
var_dump($clientes);
echo '</pre>';



include 'includes/footer.php';
