<html lang="es">
<meta charset="UTF-8"/>   
    <head>
        <title>FISICA</title>  
        <link rel="stylesheet" href="style.css">       
    </head>

<?php 
error_reporting(0);

?>    
    <form method="POST" action="Cerebro.php">

                <h3>Calculadora de fuerza</h3>
                Masa:
                    <div class="input">
                <input type="number" name="masa" value="<?php echo $masa ?>"> <br>
                Aceleracion:
                    <div class="input">
                    <input type="number" name="aceleracion" value="<?php echo $acc ?>"> <br>
                </div>
                <br>
                <input type="submit" name="fuerza" value="Calcular fuerza" class="boton"> <br>
                <br>
            </form>
<?php
if (isset($_POST['fuerza']))

    $masa=$_POST['masa'];
    $acc=$_POST['aceleracion'];
    $Fuerza=$masa*$acc;
echo "Fuerza =  ".$Fuerza," N";
?>

