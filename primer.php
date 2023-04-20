<?php

include 'primer.html';


$asistencia = null;
$calificacion = null;

define("CLASES",30);


if(isset($_POST['calificacion']) && isset($_POST['asistencia'])) {

    $asistencia = $_POST['asistencia'];
    $calificacion = $_POST['calificacion'];

    if($calificacion <=5 or $asistencia < (CLASES *0.8)) {
        
        echo"No aprobado";

    }
     else{
        echo"Aprobado";
     }
}


?>