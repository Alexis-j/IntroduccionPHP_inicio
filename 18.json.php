<?php include 'includes/header.php';

$produtos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Television',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor',
        'precio' => 400,
        'disponible' => false
    ]
];

echo "<pre>";
var_dump($produtos);

$jason = json_encode($produtos);

$json_array = json_decode($jason);

var_dump($jason);
echo "</pre>";
var_dump($json_array);
echo "</pre>";


include 'includes/footer.php';