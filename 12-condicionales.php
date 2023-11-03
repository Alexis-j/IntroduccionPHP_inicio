<?php include 'includes/header.php';

$autenticado = true;
$admin = false;


if( $admin || $autenticado) {
    echo 'El usuario está autenticado';
} else {
    echo 'El usuario no está autenticado, inicia sesión';
}

//if anidados...
$cliente = [
    'nombre' => 'Agustin',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];
echo '<br>';

if(!empty($cliente)) {
    echo 'El arreglo de cliente tiene datos';
    echo '<br>';
    if($cliente['saldo'] > 0) {
        echo 'El cliente tiene saldo disponible';
    } else {
        echo 'No hay saldo';
    };
}
echo '<br>';

// else if
if($cliente['saldo'] > 0) {
    echo 'El cliente tiene saldo disponible';
} else if($cliente['informacion']['tipo'] === 'Premium') {
    echo 'El cliente es premium';
} else {
    echo 'No hay saldo';
};
echo '<br>';

// Switch
$tecnologia = 'PHP';
switch ($tecnologia) {
    case 'PHP':
        echo 'PHP, un excelente lenguaje';
        break;
    case 'JavaScript':
        echo 'Genial, el lenguaje de la web';
        break;
    case 'HTML':
        echo 'Emmm...';
        break;
    default:
        echo 'Algo pasó';
        break;
}


include 'includes/footer.php';
