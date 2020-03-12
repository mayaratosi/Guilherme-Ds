<?php
    $numero = 5;
    
    if($numero >= 0) {
        for($i = 0; $i <= 10; $i++)
        echo $numero." x ".$i." = ".($numero*$i)."</br>";
        exit;

    }
    echo "numero invalido";
    exit;
?>
