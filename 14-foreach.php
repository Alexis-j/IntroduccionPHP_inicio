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

foreach( $produtos as $produtos) { ?>
    <li>
        <p>Producto: <?php echo $produtos['nombre']; ?></p>
        <p>Precio: <?php echo $produtos['precio']; ?></p>
        <p><?php echo ($produtos['disponible']) ? 'Disponible' : 'No disponible'; ?></p>
    </li>
    <?php 
}
include 'includes/footer.php';