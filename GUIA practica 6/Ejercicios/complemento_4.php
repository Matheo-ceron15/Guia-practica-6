<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcion </title>
</head>
<body>
    <?php
    $edad = 0;
    $promedio=0;            
    $info_beca = "Gracias por aplicar a la beca va ser beneficiado con $";
    $carta_invtacion = "Lo sentimos le invitamos a estudiar más y poder aplicar el proximo año";

        function calcularBeca($edad){
            if(isset($_POST["edad"])){
                $edad = $_POST["edad"];
                $promedio = $_POST["promedio"];
                if( $edad > 18){
                    if($promedio >= 9){
                        $info_beca .= "2000";
                    }else if($promedio>=7.5){
                        $info_beca .= "1000";
                    }else if($promedio >=6){
                        $info_beca .= "500";
                    }else{
                        $info_beca = $carta_invtacion;
                    }
                }else{
                    if( $promedio >= 9 ){
                        $info_beca .= "3000";
                    }else if( $promedio >= 8 ){
                        $info_beca .= "2000";
                    }else if( $promedio >= 6 ){
                        $info_beca .= "100";
                    }else{
                        $info_beca = $carta_invtacion;
                    }
                }
                echo "<b>".$info_beca."</b>";
            }
        }
    ?>
</body>
</html>