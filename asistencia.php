<?php
//Ejercicio uno Asistentencia Dada la calificación de un alumno mostrar en pantalla si aprueba, siempre y cuando tenga el 80% de sus asistencias, en caso de tener menos de 80% de asistencias se mostrará reprobado aún cuando su calificación sea aprobatoria  ==asistensia AS ==calificacion CAL == datos de salida variable ==mensaje == contante ==


    include 'asistencia.html';

    $nota = null;
    $asis = null;
    //$total_clases =30; por variante
    const CLASES = 30;//por constante
    
    if (isset($_POST['operador'])) {
        $nota = $_POST ['nota'];
        $asis = $_POST ['asis'];
  

                                //($total_clases *0.8)por variante
        if ($nota >=5 && $asis >=(CLASES*0.8)) {//por constante
            echo 'Aprobo';

        }
        else {
            echo 'No aprobado';
        }
       
    }







//Ejercicio uno Asistencia

//include 'asistencia.html';

//$nota = null;
//$asis = null;
// $total_clases = 30;
//const CLASES = 30;

//if (isset($_POST['operador'])) {
//$nota = $_POST['nota'];
//$asis = $_POST['asis'];

//if ($nota >= 1 && $asis >= (CLASES*0.8)) {
//echo 'Aprobo';
//}
//else {
//echo 'No Aprobo';
//}
//}


//Ejercicio 1 Modulo 3 (Asistencia)
//include 'asistencia.html';

//$cal = null;
//$as = null;
//const TOTAL = 30;

//if (isset($_POST['operador'])) {
//$cal = $_POST ['cal'];
//$as = $_POST ['as'];

//if ($cal >= 5) {
//echo 'ERROR: La calificacion maxima es 5';
//$cal = 5;
//}
//else if ($cal >= 3 && $as >= (TOTAL*0.8)) {
//echo 'Aprobó';
//}
//else {
//echo 'Reprobó';
//}
//}

?>

?>