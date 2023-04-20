<?php

include "ciclo.html";


$cantidad = null;
$i=0;

if (isset($_POST['numero'])) {
   
    $cantidad = $_POST['numero'];
    for($i=1; $i<=$cantidad; $i++) { 
       
        echo "hola mundo $i</br>";
    }
}




?>