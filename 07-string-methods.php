<?php include 'includes/header.php';

$nombreCliente = 'Alexis Jimenez';

//conocer extension de un string
echo strlen($nombreCliente); // 14
var_dump($nombreCliente);

// Eliminar espacios en blanco
$texto = trim($nombreCliente);	// Elimina espacios en blanco al inicio y al final
echo strlen($texto); // 12

// Convertir a mayusculas
echo strtoupper($nombreCliente);
echo '<br>';

// Convertir a minusculas
echo strtolower($nombreCliente);
echo '<br>';

$mail1 = 'correo@correo.com';
$mail2 = 'Correo@correo.com';

var_dump(strtolower($mail1) === strtolower($mail2));
echo '<br>';

// Reemplazar
echo str_replace('Alexis', 'Alex', $nombreCliente);

// Revisar si un string existe o no
echo strpos($nombreCliente, 'Alexis'); // 0
echo '<br>';

echo strpos($nombreCliente, 'Jimenez'); // 7 (posicion)
echo '<br>';

// Concatenar
$tipoCliente = 'Premium';
echo 'El cliente ' . $nombreCliente . ' es ' . $tipoCliente;
echo '<br>';

echo "El cliente {$nombreCliente} es {$tipoCliente}";
echo '<br>';


include 'includes/footer.php';
