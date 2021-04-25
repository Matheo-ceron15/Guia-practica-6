<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 2</title>
</head>
<body>
    <h3>Ejemlo 2</h3>
    <hr>
    <h2>Analice el siguiente ejemplo. Funciones dentro de funciones.</h2>

    <?php
        function foo(){
            function bar (){
                echo "No existo hasta que se llame el foo";
            }
        }
        //No podemos llamar aun a bar ya que no existe.
        foo();
        //ahora podemos llamar a bar(),el precesamiento de foo() la ha echo accesible.
        bar();
    ?>
</body>
</html>