<html lang="es">
<meta charset="UTF-8"/>   
    <head>
        <title>FISICA</title>  
        <link rel="stylesheet" href="style.css">       
    </head>

<?php 
error_reporting(0);

?>  
    <form method="POST" action="Masa.php">

                <h3>Calculadora de masa</h3>
             
                Fuerza:
                    <div class="input">
                <input type="number" name="fuerza" value="<?php echo $Fuerza ?>"> <br>                 
                Aceleracion:
                    <div class="input">
                    <input type="number" name="aceleracion" value="<?php echo $acc ?>"> <br>
                </div>
                <br>
                <input type="submit" name="masa" value="Calcular masa" class="boton"> <br>
                <br>
            </form>

<?php

if (isset($_POST['masa']))

    $acc=$_POST['aceleracion'];
    $Fuerza=$_POST['fuerza'];
    $masa=$Fuerza/$acc;
echo "Masa =  ".$masa," kg";
?>               
