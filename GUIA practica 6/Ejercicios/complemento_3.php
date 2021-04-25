<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complemento ejercicio 3</title>
</head>
<body>
    <?php
    $descuento=0;
    $total=0;
    function costoDescueto($costo){
        $costo = (float)$costo;
        if ($costo>=200) {
            $total = $costo - ($costo*0.15)  ;
        }
        if ($costo>100 || $costo<200) { 
            $total = $costo - ($costo*0.12);
        }
        if ($costo<100) {
            $total = $costo-($costo*0.1);
        }
        return $total;
    }
    ?>
</body>
</html>