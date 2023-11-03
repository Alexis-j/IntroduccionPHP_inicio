<?php include 'includes/header.php';

// in_array - Busca elementos en un array
$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Audifonos', $carrito)); // false

// Ordenar elementos de un array
$numeros = array(1, 3, 4, 5, 1, 2);
sort($numeros); // Ordena de menor a mayor
rsort($numeros); // Ordena de mayor a menor
echo '<pre>';
var_dump($numeros);
echo '</pre>';

//ordernar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Agustin'
);
asort($cliente); // Ordena por valores, por orden alfabetico
echo '<pre>';
var_dump($cliente);
echo '</pre>';


asort($cliente); // Ordena por valores, por orden alfabetico de la Z a la A
echo '<pre>';
var_dump($cliente);
echo '</pre>';


ksort($cliente); // Ordena por llaves, por orden alfabetico
echo '<pre>';
var_dump($cliente);
echo '</pre>';


krsort($cliente); // Ordena por llaves, por orden alfabetico de la Z a la A
echo '<pre>';
var_dump($cliente);
echo '</pre>';


include 'includes/footer.php';
