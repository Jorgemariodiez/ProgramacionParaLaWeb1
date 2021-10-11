
<?php

//Ejercicio 1
echo "<br>";
echo "Ejercicio N 1";
echo "<br>";
echo "<br>";
$salario = 1800000;
$descsalud=0.08;
$descpension=0.08;

$totaldevengado=$salario-($salario*$descsalud)-($salario*$descpension);
echo "El salario es                 : $".$salario."<br>";
echo "El descuento por salud es     : $".($salario*$descsalud)."<br>";
echo "El descuento por pension es   : $".($salario*$descpension)."<br>";
echo "Total devengado es            : $".$totaldevengado."<br>";

echo "<br><hr>";
//Ejercicio 2
echo "Ejercicio N 2";
echo "<br>";
echo "<br>";

$b=6;
$h=15;
$a=($b*$h)/2;
echo "Area de un triangulo<br>";
echo "<br>";
echo "Base = ".$b." metros<br>";
echo "Altura=".$h." metros<br>";
echo "El area es: (".$b." X ".$h.")/2 = ".$a." metros cuadrados";

echo "<br><hr>";
//Ejercicio 3
echo "Ejercicio N 3";
echo "<br>";
echo "<br>";

$num1=6;
$num2=4;

echo "La suma de ".$num1." + ".$num2." es igual a ".($num1+$num2)."<br>";
echo "La resta de ".$num1." - ".$num2." es igual a ".($num1-$num2)."<br>";
echo "La multiplicacion de ".$num1." X ".$num2." es igual a ".($num1*$num2)."<br>";
echo "La division de ".$num1." ÷ ".$num2." es igual a ".($num1/$num2)."<br>";
echo "El modulo de ".$num1." % ".$num2." es igual a ".($num1%$num2)."<br>";

echo "<br><hr>";
//Ejercicio 4
echo "Ejercicio N 4";
echo "<br>";
echo "<br>";

$num3=-132;
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

echo "<br><hr>";
//Ejercicio 5
echo "Ejercicio N 5";
echo "<br>";
echo "<br>";

$num4=56;
$num5=65;
echo "El numero mayor entre ".$num4. " y ".$num5." es: ";
if($num4<$num5){
    echo $num5;
}else{
    echo $num4;
}

echo "<br><hr>";
//Ejercicio 6
echo "Ejercicio N 6";
echo "<br>";
echo "<br>";

$dia=5;

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

echo "<br><hr>";
//Ejercicio 7
echo "Ejercicio N 7";
echo "<br>";
echo "<br>";

$edad=35;

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

echo "<br><hr>";
//Ejercicio 8
echo "Ejercicio N 8";
echo "<br>";
echo "<br>";

$num6=7;

for ($i=0; $i <= 12 ; $i++) { 
    echo $num6." X ".$i." = ".($num6*$i)."<br>";
}

echo "<br><hr>";
//Ejercicio 9
echo "Ejercicio N 9";
echo "<br>";
echo "<br>";

$num6=8;

for ($i=12; $i >= 0 ; $i--) { 
    echo $num6." X ".$i." = ".($num6*$i)."<br>";
}

echo "<br><hr>";
//Ejercicio 10
echo "Ejercicio N 10";
echo "<br>";
echo "<br>";

$num7=30;
for($j=0; $j<=$num7; $j++){
    if($j%3==0){
    echo $j.",";
    }
    }
    echo "<br><hr>";
    //Ejercicio 11
    echo "Ejercicio N 11";
    echo "<br>";
    echo "<br>";

    $num8=30;
    for($k=$num8; $k>=0; $k--){
    if($k%3==0){
    echo $k.",";
    }}

    echo "<br><hr>";
    //Ejercicio 12
    echo "Ejercicio N 12";
    echo "<br>";
    echo "<br>";

    $elementos =array("uno","dos","tres");
    echo "Array con 3 elementos<br>";
    for ($i=0; $i < count($elementos); $i++) {
        echo $elementos[$i]." - ";  
    }
    echo "<br>";
    array_push($elementos,"cuatro","cinco");
    echo "Array con 2 elementos mas<br>";
    for ($i=0; $i < count($elementos); $i++) {
        echo $elementos[$i]." - ";  
    }

    echo "<br><hr>";
    //Ejercicio 13
    echo "Ejercicio N 13";
    echo "<br>";
    echo "<br>";

    $elementos1 =array("uno"=>"one","dos"=>"two","tres"=>"three","cuatro"=>"four");

    foreach ($elementos1 as $elementos2 => $value) {
       echo $elementos2. " = ".$value."<br>";
    }
    
    echo "<br><hr>";
    //Ejercicio 14
    echo "Ejercicio N 14";
    echo "<br>";
    echo "<br>";

    $elementos4 =array(
     array("uno","dos","tres","cuatro"),
     array("cuatro","cinco","seis","siete"),
     array("seis","siete","ocho","nueve"),
     array("nueve","diez","once","doce")
    );
    
    for ($m=0; $m< count($elementos4); $m++) {
        echo "Numero fila: ".$m."<br>";
        for ($n=0;$n< count($elementos4[$m]); $n++) {
        echo "Posicion fila: ".$m."-Columna:".$n."=> ".$elementos4[$m][$n]."<br>";
        }
        echo "<br>";
    }
    echo "<br><hr>";
    //Ejercicio 15
    echo "Ejercicio N 15";
    echo "<br>";
    echo "<br>";
    $elementos5 =array(
        "1234"=>array("uno","dos","tres","cuatro"),
        "4567"=>array("cuatro","cinco","seis","siete"),
        "6789"=>array("seis","siete","ocho","nueve"),
        "9101112"=>array("nueve","diez","once","doce")
    );

    foreach ($elementos5 as $numero => $letras) {
        echo "Numeros: ".$numero."<br>";
        echo "En letras: ";
        foreach ($letras as $letra) {
            echo "-".$letra;
        }
        echo "<br>";
    }
    echo "<br><hr>";
    //Ejercicio 16
    echo "Ejercicio N 16";
    echo "<br>";
    echo "<br>";

    $arregloNum =array(3,5,9,10,35,42,12,22);
    $contador=0;
    for($num=0; $num< count($arregloNum); $num++){
        if ($arregloNum[$num]%2==0){
            echo $arregloNum[$num]." es par"."<br>";
            $contador++;
        }else{
            echo $arregloNum[$num]." es impar"."<br>";
        }
    }
    echo "Total numeros pares en el arreglo son: ".$contador."<br>";
    echo "Total numeros impares en el arreglo son: ".($num-$contador);

    echo "<br><hr>";
    //Ejercicio 17
    echo "Ejercicio N 17";
    echo "<br>";
    echo "<br>";

    $arregloNum1 =array(3,5,9,10,35,42,12,22,25);
    echo "Primer elemeto del arreglo: ".reset($arregloNum1)."<br>";
    $ultimo = count($arregloNum1)-1;
    echo "Ultimo elemeto del arreglo: ".end($arregloNum1)."<br>";
    $medio = ($ultimo/2);
    echo "El elemeto del medio del arreglo es: ".$arregloNum1[$medio];

    echo "<br><hr>";
    //Ejercicio 18
    echo "Ejercicio N 18";
    echo "<br>";
    echo "<br>";

    $arregloNum2 =array(3,5,9,10,35,42,12,22,25);
    for ($p=0; $p<count($arregloNum2); $p++){
        if ($p%2==!0){
            echo "La posicion ".$p." impar del arreglo es: ".$arregloNum2[$p]."<br>";
        }else{
            echo "La posicion ".$p. " par del arreglo es: ".$arregloNum2[$p]."<br>";
        }
    }

    echo "<br><hr>";
    //Ejercicio 19
    echo "Ejercicio N 19";
    echo "<br>";
    echo "<br>";

    $arreglouno = array(3,5,9,10,35,42);
    $arreglodos = array(9,15,7,1,22,2);
    $total1=0;
    foreach ($arreglouno as $uno => $valor) {
        $total1=$arreglouno[$uno]+$total1;
    }
    echo "La suma de los elementos del arreglo 1 es: ".$total1."<br>";
    $total2=0;
    foreach ($arreglodos as $dos => $valor) {
        $total2=$arreglodos[$dos]+$total1;
    }
    echo "La suma de los elementos del arreglo 2 es: ".$total2."<br>";
    echo "La suma de los elementos del arreglo 1 y 2 es ".($total1+$total2);
    echo "<br>";

    for ($q=0; $q< count($arreglouno); $q++){
        $arreglotres[$q]=($arreglouno[$q]+$arreglodos[$q]);
        echo $arreglotres[$q]." = ".$arreglouno[$q]." +".$arreglodos[$q]."<br>";
    }
    echo "Arreglo 3 es la suma de las posiciones de arreglo 1 y 2: "."<br>";
    foreach($arreglotres as $tres =>$valor){
        echo $arreglotres[$tres].",";
    }
    echo "<br>";
    echo "Los elementos de arreglo 2 se suma al arreglo 1<br>";
    echo "Elementos del arreglo 1: ".count($arreglouno)."<br>";
    for($r=0; $r< count($arreglodos); $r++){
        array_push($arreglouno, $arreglodos[$r]);
        echo "Posicion ".$r." El elemento es ".$arreglouno[$r]."<br>";
    }
    echo "Elementos del arreglo 1 sumados los elementos del arreglo 2 : ".count($arreglouno)."<br>";
    for($r=0; $r< count($arreglouno); $r++){
        echo "Posicion ".$r." El elemento es ".$arreglouno[$r]."<br>";
    }

?>

