<?php include 'includes/header.php';

$clientes = [];
$clientes = array();
$clientes3 = array('Alexis', 'Agustin', 'Pedro');
$cliente = [
    'nombre' => 'Agustin',
    'saldo' => 200,
];

//empty: Revisa si un arreglo esta vacio
var_dump(empty($clientes));
echo '<br>';
var_dump(empty($clientes));
echo '<br>';
var_dump(empty($clientes3));

//isset: Revisa si un arreglo esta creado o una propiedad esta definida
echo '<br>';
var_dump(isset($clientes));
echo '<br>';
var_dump(isset($clientes));
echo '<br>';
var_dump(isset($clientes3));
echo '<br>';
var_dump(isset($clientes4));

// isset permite revisar si una propiedad de un arreglo asociativo existe
var_dump(isset($cliente['nombre']));
var_dump(isset($cliente['codigo']));



include 'includes/footer.php';
