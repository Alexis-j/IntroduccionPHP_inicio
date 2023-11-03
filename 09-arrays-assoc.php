<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Agustin',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium',
        'disponible' => 100
    ]
];

echo '<pre>';
var_dump($cliente);
echo '</pre>';

echo $clientes['nombre'];
echo '<br>';
echo $clientes['saldo'];
echo '<br>';
echo $clientes['informacion']['disponible'];

$cliente['codigo'] = 1234;

echo '<pre>';
var_dump($cliente);
echo '</pre>';


include 'includes/footer.php';
