<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicios</h2>

<?php 
    $arreglo = [

        "keyStr1" => "lado",
        0 => "ledo",
    
        "keyStr2" => "lido",
        1 => "lodo",
        2 => "ludo"
    
    ];

    foreach($arreglo as $elemento){
        echo $elemento." ";
    }
// resultado: lado ledo lido lodo ludo
?>

</body>
</html>