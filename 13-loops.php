<?php include 'includes/header.php';

//while
$i = 100; // inicializador

while($i < 10){ // condicion
    echo $i . '<br>';

    $i++; // incremento
}

echo '<br>';

// do while
$i = 100;

do{
    echo $i . '<br>';

    $i++;
} while($i < 10);

echo '<br>';

// For loop
for($i = 100; $i < 10; $i++){
    echo $i . '<br>';
}

/**
 * 3 imprimir Fizz
 * 5 imprimir Buzz
 * 3 y 5 imprimir FizzBuzz
 */
for($i = 1; $i < 100; $i++){
    if($i % 3 === 0 && $i % 5 === 0){
        echo $i . ' - FizzBuzz <br>';
    }
    elseif($i % 3 === 0){
        echo $i . ' - Fizz <br>';
    }
    elseif($i % 5 === 0){
        echo $i . ' - Buzz <br>';
    }else {
        echo $i . '<br>';
    }
}
include 'includes/footer.php';
