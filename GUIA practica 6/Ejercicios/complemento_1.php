<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>metodoa para ejercicio 1</title>
</head>
<body>
    <?php 
        function datos($cantidad){
            if ($cantidad<=2) {
                $total = $cantidad*5;
            }else {
                if ($cantidad<=5) {
                    $total =(($cantidad-2)*4)+10;
                } else {
                    if ($cantiad<=10) {
                        $total=(($cantidad-5)*3)+22;
                    } else {
                        $total = (($cantidad-10)*2)+37;
                    }
                }   
            }
            return $total;
        }
    ?>
</body>
</html>