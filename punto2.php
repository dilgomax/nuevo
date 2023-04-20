<?php

include 'punto2.html';
$correcta = null;
$incorrecta =null;
$blanco = null;
$total = null;
$total_correcta = null;
//const X = 10;

if (isset($_POST['operador'])) {
    $correcta = $_POST ['correcta'];
    $incorrecta = $_POST ['incorrecta'];
    $blanco = $_POST['blanco'];

    //operaciones multiplicarx4
   $total_correcta = $correcta *4;
   $total = $total_correcta - $incorrecta;
   echo'la cantidad de puntos es :'.$total;

}




?>