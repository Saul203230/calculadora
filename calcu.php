<html>
    <head>
        <meta charset="UTF-8"  />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <?php 
    
    $numero = $_GET['valor'];
    for($i =1;$i < 11; $i++){
        $multiplicacion = $numero * $i;
        echo $numero." X ".$i." = ".$multiplicacion."</br>";


    }
    
    
    ?>
    <body>
</body>
</html>