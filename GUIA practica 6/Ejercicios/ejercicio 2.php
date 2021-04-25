<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
<h2>Ejercicio 2</h2>
    <p>
        Se tiene el nombre y la edad de tres personas. Se desea saber el nombre y la
        edad de la persona de menor edad.
    </p>
    <?php

    $edad1=10;
    $edad2=9;
    $edad3=5;
    $mensaje ="";
        if($edad1 > $edad2 && $edad1 > $edad3){
            if($edad2 > $edad3){
                $mensaje = "Edad mayor ".$edad1." y la edad menor ".$edad3;
            }else{
                $mensaje = "Edad mayor ".$edad1." y la edad menor ".$edad2;
            }
        }
        echo $mensaje;
    ?>
</body>
</html>