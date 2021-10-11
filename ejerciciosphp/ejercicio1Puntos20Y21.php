<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller Programacion para la web 1</title>
</head>
<body>
    <br><hr>
    <h2>Ejercicio N 20</h2>
    <form action="">
        
        <input type="text" name="nombre" placeholder="Ingrese el nombre" required>
        <input type="submit" value="Enviar">
    </form>
    <?php
    echo "<br><hr>";
    //Ejercicio 20
    echo "<br><br>";
    
    if(isset($_REQUEST['nombre'])){
        $nombre = $_REQUEST['nombre'];
    if(is_numeric($nombre)){
        echo "Debe digitar un nombre valido.<br>";
        echo "Nombre ingresado tiene carateres numericos.";
    }else{
        
        echo "El nombre digitado es: ".$nombre; 
        }
    }
    ?>
    <br><hr>
    <h2>Ejercicio N 21</h2>
    <br><hr>
    <form action="">
        <input type="text" name="numUno" placeholder="Ingrese el primer numero" required>
        <input type="text" name="numDos" placeholder="Ingrese el segundo numero" required>
        <input type="submit" value="Hacer operaciones">
    
    </form>
    
<?php
    echo "<hr>";
    //Ejercicio 21
    
    echo "<br>";
    if(isset($_REQUEST['numUno']) && isset($_REQUEST['numDos'])){
        $num1 = $_REQUEST['numUno'];
        $num2 = $_REQUEST['numDos'];
    
    if(is_int($num1) || is_int($num2)){
        echo "Debe digitar 2 numeros validos.";

    }else{
        echo "La suma de ".$num1." + ".$num2." = ".($num1+$num2)."<br>";
        echo "La resta de ".$num1." - ".$num2." = ".($num1-$num2)."<br>";
        echo "La multiplicacion de ".$num1." X ".$num2." = ".($num1*$num2)."<br>";
        echo "La division de ".$num1." ÷ ".$num2." = ".($num1/$num2)."<br>";
   
    }

    }
    echo "<br>".$_SERVER['PHP_SELF']."<br>";
    echo $_SERVER['SERVER_NAME'];
?>
    
</body>
</html>