<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
        <form >
            <input name="Nombre" type="text" placeholder="Digita nombre"><br>
            <button type="summit">Enviar Datos</button>
        </form>
    
    
</body>
</html>
<?php

if (isset($_GET["Nombre"])){


function decirnombre(){

    $nombre=$_GET["Nombre"];
    if(is_numeric($nombre)){
        echo "Debe ingresar un nobre valido";
    }else{
        echo "El nombre es: ".$nombre;
        
    }
}
decirnombre();
}

?>