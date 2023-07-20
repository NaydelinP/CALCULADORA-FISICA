<?php

                                                            // Revisamos si tenemos algo
if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                            // Variables  necesarias, numero de vectores será el input oculto
    $numero_de_vectores = $_POST["cantidad_vectores"];
    $suma_x = 0;
    $suma_y = 0;
    $fuerza_resultante = 0;                                 //esta cochinada
    $angulo_final = 0;
    $mensaje_final = "";

                                                            // Recorremso nuestros vectores y calculamos la suma de x y de y
    for ($i=0; $i < $numero_de_vectores; $i++) { 
        $suma_x = $suma_x + $_POST["componente_x_vector_$i"];
        $suma_y = $suma_y + $_POST["componente_y_vector_$i"];
    }

                                                            // Calculamos la fuerza resultante
    $fuerza_resultante = sqrt(pow($suma_x, 2) + pow($suma_y, 2));
    
                                                            // Calculamos el ángulo, el try catch es por las divisiones entre 0
    try {
        $angulo_final = rad2deg(atan($suma_y / $suma_x));
    } catch (ArithmeticError $e) {
        if ($suma_x == 0) $angulo_final = 90;
        if ($suma_y == 0) $angulo_final = 0;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma vectorial</title>
</head>

<body>
    <h3>RESULTADO</h3>
    <?php 
    
    echo "<p>La fuerza resultante es: $fuerza_resultante</p>";
    //echo "<p>Y tiene un ángulo de: $angulo_final</p>";
    ?>
</body>

</html>