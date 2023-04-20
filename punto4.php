<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="punto2.css">
</head>
<body id="body">
    <form action="" method="post">
    <label for="">Ingrese la cantidad de veces que desea imprimir</label>
    <input tipe="number" name="cantidad"placeholder="ingrese Cantidad">
    <input type="submit"name="datos" value="Generar ciclo">
    </form>
    
</body>
</html>
<?php

if (isset($_POST['datos'])) {
    $a=1;
    $cant = $_POST['cantidad'];

    while ($a <= $cant) {
        echo 'Hola Mundo'.$a .'<br>';
        $a++;
    }
}





do {
    # code...
} while ($a <= 10);

?>