<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8"/>   
<head>
    <title>FISICA</title>  
</head>
<body>
    <section>
    <h2>Calculadora</h2>
    </section>
    <link rel="stylesheet" href="style.css">
    <p> 
        <form method="post" action="Cerebro.php">      <!--Fuerza-->
            <h3>¿Qué desea calcular?</h3>

            <input type="submit" name="0" value="Fuerza"/> <br>
            <br>
        </form>     
        <form method="post" action="Masa.php">         <!--Masilla--> 

            <input type="submit" name="1" value="Masa"/>  <br>
            <br>
        </form> 
        <form method="post" action="Acc.php">         <!--Aceleración--> 

            <input type="submit" name="2" value="Aceleración"/> <br>
            <br>
         </form>    

        <form method="post" action="Vec.php">         <!--Vectores-->   

            <input type="submit" name="calcular" value="Vectores"/> <br>
    </p>
</body>
</html>

