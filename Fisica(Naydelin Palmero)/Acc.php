<html>
    <head>
    <title>FISICA</title>
    
    <link rel="stylesheet" href="style.css" >
</head>

    <body class="cuerpo">
<form method="POST" action="Acc.php">

    <h2>Calculadora de aceleración</h2>

    <h3>Aceleración a partir de una fuerza </h3>
    
                Fuerza:
                    <div class="input">
                <input type="number" name="fuerza" value="<?php echo $Fuerza ?>"> <br>
                Masa:
                    <div class="input">
                    <input type="number" name="masa" value="<?php echo $masa ?>"> <br>
                </div>
                <br>
                <input type="submit" name="acc" value="Calcular aceleración" class="boton"> <br>
                <br>
 

    <h3>Distancia</h3>            
        <div class="campo">
                    Velocidad inicial:
        <div class="input">
    <input type="number" name="Vo" value="<?php echo $vo ?>">
        </div>
                    Velocidad final:
        <div class="input">
    <input type="number" name="Vf" value="<?php echo $vf ?>">
        </div>
                    Tiempo:
        <div class="input">
    <input type="number" name="Tiempo" value="<?php echo $t ?>">
        </div> 
        <br>
                        
    <input type="submit" name="acc2" value="Calcular aceleración" class="boton">
    <br>
    </form>

<?php
error_reporting(0);

if (isset($_POST['acc'])) {
    $masa=$_POST['masa'];
    $Fuerza=$_POST['fuerza'];
    $acc=$Fuerza/$masa;

echo "Aceleración =  ".$acc,"m/s<sup>2</sup>";

}
if (isset($_POST["acc2"])) {
    $vo=$_POST["Vo"];
    $vf=$_POST["Vf"];
    $t=$_POST["Tiempo"];
    $acc2= $vf-$vo/$t;

echo "Aceleración =  ".$acc2," m/s<sup>2</sup>";
} 
?> 
  