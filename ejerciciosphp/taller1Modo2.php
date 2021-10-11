<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 1 en modo 2</title>
</head>
<body>
    <br><h1>Ejercicio 1</h1>
    <hr>
    <form action="" method="get">
        <h2>Liquidacion de un salario</h2><br>
        Ingrese el salario $ <input type="text" name='salario' required><br><br>
        <button type="submit">Liquidar salario</button>
    </form>
    
    <?php
    isset($_GET['salario']);
    $salario = $_GET['salario'];
    $descsalud = 0.08;
    $descpension = 0.08;

    $totaldevengado=$salario-($salario*$descsalud)-($salario*$descpension);
    echo "El salario es =============>: $".$salario."<br>";
    echo "El descuento por salud es ====>: $".($salario*$descsalud)."<br>";
    echo "El descuento por pension es ==>: $".($salario*$descpension)."<br>";
    echo "Total devengado es =========>: $".$totaldevengado."<br>";
    
    ?>

    <br><h1>Ejercicio 2</h1>
    <hr>
    <form action="" method="get">
    <h2>Calcular el area de un triangulo</h2><br>
    Ingrese la base en metros: <input type="text" name='base' required><br>
    Ingrese la altura en metros: <input type="text" name='altura' required><br>
    <button type="submit">Calcular Area</button>
    </form>
    <?php
    isset($_GET['base']);
    isset($_GET['altura']);
    $b =$_GET['base'];
    $h =$_GET['altura'];
    $a=($b*$h)/2;
    echo "Area de un triangulo<br>";
    echo "Base = ".$b." metros<br>";
    echo "Altura=".$h." metros<br>";
    echo "El area es: (".$b." X ".$h.")/2 = ".$a." metros cuadrados";
    ?> 

    <br><h1>Ejercicio 3</h1>
    <hr>
    <form action="" method="get"> 
    <h2>Realizar la suma, resta, multiplicacion, division y modulo con solo 2 numeros</h2><br>
    Ingresar el primer numero: <input type="text" name='num1' required><br>
    Ingresar el segundo numero: <input type="text" name='num2' required><br>
    <button type="submit">Realizar operaciones</button>
    <?php
    isset($_GET['num1']);
    isset($_GET['num2']);
    $num1 =$_GET['num1'];
    $num2 =$_GET['num2'];
    
    echo "La suma de ".$num1." + ".$num2." es igual a ".($num1+$num2)."<br>";
    echo "La resta de ".$num1." - ".$num2." es igual a ".($num1-$num2)."<br>";
    echo "La multiplicacion de ".$num1." X ".$num2." es igual a ".($num1*$num2)."<br>";
    //echo "La division de ".$num1." ÷ ".$num2." es igual a ".($num1/$num2)."<br>";
    //echo "El modulo de ".$num1." % ".$num2." es igual a ".($num1%$num2)."<br>";
    ?>
    </form>
    
    
  
    <br><h1>Ejercicio 4</h1>
    <hr>
    <form action="" method="get"> 
        <h2>Determinar si un numero es par o impar, negativo o positivo</h2> 
        Digite el numero a analizar: <input type="text" name='num3' required><br>
        <button type="submit">Analizar numero</button>   
    </form>
    <?php
    isset($_GET['num3']);
    $num3 =$_GET['num3'];
    echo "El numero ".$num3;        

    if ($num3%2==0) {
        echo " es par";
    }else{
        echo " es impar";
    }
    if ($num3>0){
        echo " y es positivo.";
    }else{
        echo " y es negativo.";
    }
  ?>
  <br><h1>Ejercicio 5</h1>
    <hr>
    <form action="" method="get"> 
    <h2>Determinar cual es le mayor de 2 numeros</h2><br>
    Ingresar el primer numero: <input type="text" name='num4' required><br>
    Ingresar el segundo numero: <input type="text" name='num5' required><br>
    <button type="submit">Cual es el Mayor</button><br>
    <?php
    isset($_GET['num4']);
    isset($_GET['num5']);
    $num4 =$_GET['num4'];
    $num5 =$_GET['num5'];

    echo "El numero mayor entre ".$num4. " y ".$num5." es: ";
    if($num4<$num5){
        echo $num5;
    }else{
        echo $num4;
    }

    ?>
    </form>
    <br><h1>Ejercicio 6</h1>
    <hr>
    <form action="" method="get"> 
    <h2>Averguar el dia de la semana entre 1 y 7</h2><br>
    Ingresar el dia en numero: <input type="text" name='dia' required><br>
    <button type="submit">Dia correspondiente</button><br>
    <?php
    isset($_GET['dia']);
    $dia =$_GET['dia'];
    
    switch($dia){
        case 1:
            echo "El dia ".$dia." es lunes";
        break;
        case 2:
            echo "El dia ".$dia." es martes";
        break;
        case 3:
            echo "El dia ".$dia." es miercoles";
        break;
        case 4:
            echo "El dia ".$dia." es jueves";
        break;
        case 5:
            echo "El dia ".$dia." es viernes";
        break;
        case 6:
            echo "El dia ".$dia." es sabado";
        break;
        case 7:
            echo "El dia ".$dia." es domingo";
        break;
        default:
             echo "ingrese un dato entre 1 y 7";
        break;

    }
    ?>
    </form>

    <br><h1>Ejercicio 7</h1>
    <hr>
    <form action="" method="post"> 
    <h2>Clasificar por edad</h2><br> 
    Ingresar la edad: <input type="text" name='edad' required><br>
    <button type="submit">Clasificar por edad</button><br>
    <?php
    isset($_POST['edad']);
    $edad =$_POST['edad'];

    echo "La persona con la edad de ".$edad. " es ";
        if ($edad<18){
        echo "adolescente";
    }else if($edad>=18 && $edad<=28){
        echo "adulto adolescente";
    }else if($edad>=29 && $edad<=49){
        echo "adulto";
    }else if($edad>=50){
        echo "adulto mayor";
    }else{
        echo "solo numeros positivos menores de 90";
    }
    ?>  
    </form> 

    <br><h1>Ejercicio 8</h1>
    <hr>
    <form action="" method='post'>
        <h2>La tabla de multiplicar</h2><br>
        Ingrese un numero: <input type="text" name='num6' required><br>
        <button type="submit">Crear la tabla</button><br>
    <?php
    isset($_POST['num6']);
    $num6=($_POST['num6']);

    for ($i=0; $i <= 12 ; $i++) { 
        echo $num6." X ".$i." = ".($num6*$i)."<br>";
    }
    
    ?>
    </form>

    <br><h1>Ejercicio 9</h1>
    <hr>
    <form action="" method='post'>
        <h2>La tabla de multiplicar descendente</h2>
        Ingrese un numero: <input type="text" name='num7' required><br>
        <button type="submit">Crear la tabla descendente</button><br>
    <?php
    isset($_POST['num7']);
    $num7=($_POST['num7']);

    for ($i=12; $i >= 0; $i--) { 
        echo $num7." X ".$i." = ".($num7*$i)."<br>";
    }
    
    ?>
    </form>

    <!-- <br><h1>Ejercicio 10</h1>
    <hr>
    <form action="" method='post'>
        <h2>Ciclo ascendente de 3 en 3</h2><br>
        Ingrese un numero:<input type="text" name='num8' required><br>
        <button type="submit">Crear ciclo de 3 en 3</button>

    //<?php
    //isset($_POST['num8']);
    //$num8=$_POST['num8'];

    //for($j=0; $j<=$num8; $j++){
    //    if($j%3==0){
    //    echo $j.",";
    //}
    //}
    ?>
    </from> 
    <br><h1>Ejercicio 11</h1>
    <hr>
    <form action="" method='post'>
        <h2>Ciclo descendente de 3 en 3</h2>
    <?php
    //isset($_POST['num8']);
    //$num8=$_POST['num8'];
    
    //for($j=$num8; $j>=0; $j--){
    //    if($j%3==$num7){
    //    echo $j.",";
    //}
    //}
    ?>
    </from>   
     -->
    <br><h1>Ejercicio 12</h1>
    <hr>
    <h3>Crear array de 3 elementos</h3><br>
    <form method='post'>
        <?php
            for ($i=1; $i<=3; $i++){
                echo "Ingrese el ".$i." elemento del array"."<input type='text' name='elemento".$i."'placeholder='elemento ".$i."'><br>";
            }
        ?> 
        Ingrese primer elemento al array:<input type="text" name='elem1' required><br>
        Ingrese segundo elemento al array:<input type="text" name='elem2' required><br>
        <button type="submit">Crea array de 3 elementos y agrega 2 elementos mas</button><br>
                
        <?php
        $tres_elementos= array();
        if (isset($_POST['elemento1'])){
            $elemento1 = $_POST['elemento1'];
            $elemento2 = $_POST['elemento2'];
            $elemento3 = $_POST['elemento3'];
            array_push($tres_elementos, $elemento1, $elemento2, $elemento3);
     
        echo "Array con 3 elementos :".count($tres_elementos)."<br>";
        for ($i=0; $i < count($tres_elementos); $i++) 
        {
        echo "Elemento ".($i+1)." = ".$tres_elementos[$i]." - ";  
        }

        }else{
        echo " Debe ingresar elementos al array";
        } 

        echo "<br>";
     isset($_POST['elem1']);
     isset($_POST['elem2']);
     $elem1=$_POST['elem1'];
     $elem2=$_POST['elem2'];
        

     array_push($tres_elementos,$elem1,$elem2);
     echo "Array con 2 elementos mas<br>";
     for ($i=0; $i < count($tres_elementos); $i++) {
        echo $tres_elementos[$i]." - ";  
     }
    ?>
    </form>
    <br><h1>Ejercicio 13-14-15</h1>   
    <hr>
    <form method='post'>
        <?php
    
         for($k=1; $k<=4; $k++){ 
             echo "Posicion".$k."<br>"."<input type='text' name='posicion".$k."'><br>" ;
                for($j=1; $j<=2; $j++){
                    echo "Posicion ".$k."-".$j."<input type='text' name='elem".$k."-".$j."'><br>";
                }
            }
        ?>    
        <button type="submit">Crea array asociativo</button>
    </form>
        <?php
            if (isset($_POST['posicion1'])){
                $asociativo_elementos=array(
                    $_POST['posicion1']=>array($_POST['elem1-1'],$_POST['elem1-2']),
                    $_POST['posicion2']=>array($_POST['elem2-1'],$_POST['elem2-2']),
                    $_POST['posicion3']=>array($_POST['elem3-1'],$_POST['elem3-2']),
                    $_POST['posicion4']=>array($_POST['elem4-1'],$_POST['elem4-2'])
                    );
                   
                    foreach($asociativo_elementos as $asociativo => $values) {
                    echo "<br>Posicion $asociativo"."<br>";
                    foreach ($values as     $value){
                        echo "Elemento $value =>";
                    }
                    }
                    echo "<p>numero de elementos ".count($asociativo_elementos). "</p>"; 
            }
        ?>
     <br><h1>Ejercicio 16</h1>   
     <hr> 
     

        
     


  
    




</body>
</html>