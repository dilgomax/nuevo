<?php

include "segundo.html";

$correcta = null;
$incorrecta = null;
$en_blanco = null;


if(isset($_POST['correcta'])&& isset($_POST['incorrecta'])&& isset($_POST['en_blanco'])) {
    
    $correcta = $_POST['correcta'];
    $incorrecta = $_POST['incorrecta'];
    $en_blanco = $_POST['en_blanco'];

    $resultado = (4*$correcta) - $incorrecta + 0*$en_blanco;

    echo "su calificacion es $resultado";


}


?>