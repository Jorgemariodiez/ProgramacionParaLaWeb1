
   <?php
        $nombre ="Jorge Mario"."<br>";
        echo "Hola Mundo PHP"."<br>". " PHP  ".$nombre."<br>";
       // $nombre =1234;
       // print "Hola Mundo PHP". " PHP  ".$nombre;
        /* comatarios de doble */
      // comentario de una sola linea
      #cometario asi con "#"

//Arrays

$nombres = array("Carlos","Luis","Julian","Ester","Ana");
array_push ($nombres,"Maria", "Jose");
//for
for ($i=0; $i<count($nombres); $i++)
{
echo $nombres[$i]."<br>";
}
//while
$x = 0;
while($x < count($nombres)){
   echo $nombres[$x]."<br>";
$x++;
}
//foreach
foreach($nombres as $nom){
echo $nom."<br>";
}

//imprimir el numero menor
$numeros = array(4,6,7,2,9);
$menor=999;
for ($i=0; $i < count($numeros) ; $i++) { 
if ($numeros[$i] < $menor) {
   $menor=$numeros[$i];
 
}
}
echo "El menor es".$menor."<br>";
 
$motos =["Kawasaky", "Susuki", 34,];
echo $motos[2];

echo count($motos);
array_push($motos, "Yamaha", "Honda");
echo count($motos);

echo "Hay ".count($motos)."marcas de motos<br>";
$marcas =count($motos);
echo "<h1>Hay $marcas marcas de motos</h1>";

//echo "<script> alert('Hola desde PHP') </script>";
//array asociativos
$planetas = array(
 "nombre" => "Jupiter", 
 2 => "Mercurio",
 "Planeta"=>"Saturno",
 "21" => "Tierra"
);
echo $planetas["Planeta"]."<br>";
echo $planetas[2]."<br>";
echo $planetas["21"]."<br>";
//ciclo foreach
foreach ($planetas as $planeta1 => $valor) { 
   echo $planeta1." = ".$valor."<br>";
  
}
// if
$numero = 8;
echo "Con if normal<br>";
if ($numero>7) {
   echo " el numero es.$numero. mayor<br>";
}else{
   echo " el numero es.$numero. menor<br>";
}
//if ternario
echo "Con if ternario <br>";
echo $numero>10 ? " el numero es$numero mayor<br>":" el numero es $numero menor<br>";

//ejercicio
echo date("D")."<br>";

if(date("D")== "Mon"){
   echo "Es lunes";
}else if(date("D")== "Tue"){
   echo "Es Martes";
}else if(date("D")== "Wed"){
   echo "Es Miercoles";
}else if(date("D")== "Thu"){
   echo "Es Jueves";
}else if(date("D")== "Fri"){
   echo "Es Vierness";
}else {
   echo "Es fin de semana";
} echo "<hr>";

//sentencia swicht
switch(date("D")){
   case date("D")==  "Mon":
      echo "Es lunes";
      break;
   case date("D")==  "Tue":
      echo "Es martes";
      break;
   case date("D")==  "Wed":
      echo "Es miercoles";
      break;
   case date("D")==  "Thu":
      echo "Es jueves";
      break;
   case date("D")==  "Fri":
      echo "Es Viernes";
      break; 
   default:
      echo "Es fin de semana";
   break; 

}
//Array multidimencionales o matriz
echo "<hr>";

$paise = array(
   "Colombia"=> array("Bogota", "Medellin", "Cali"),
   "Peru"=>array("Lima","Piura", "Ica"),
   "Brasil"=>array("Brasilia","Saopaulo", "Rio Janerio")
);
echo $paise["Colombia"][1];
echo $paise["Peru"][1];
 
foreach ($paise as $pais=>$ciudades){
   echo "Pais : ".$pais. "<br>";
   echo "Ciudades: <br>";
   foreach($ciudades as $ciudad){
      echo "* ".$ciudad."<br>";
   }
}
//Ambitos de variables
$nombre = "Jorge Mario";
echo $nombre."<br>";
function dimenombre(){
    global $nombre;
    echo " El nombre es: ". $nombre."<br>";
}
dimenombre();

//$nombre=$_REQUEST["nombre"];
echo $nombre;
      
