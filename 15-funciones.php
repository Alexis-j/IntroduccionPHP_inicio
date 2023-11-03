<?php 
declare(strict_types=1); // Para que PHP sea estricto en el tipo de dato que se le pasa a la función	
include 'includes/header.php';


function Sumar(int $numero1 = 0, int $numero2 = 0) {
    echo $numero1 + $numero2;
    echo "<br>"; 
}

sumar(10, 30);

include 'includes/footer.php';