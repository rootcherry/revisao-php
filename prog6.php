<?php 
    $num = 5000;
    
    function testa_escopo () {
        global $num;
        $num += 5;
        echo $num . "<br>";
    }

    echo $num . "<br>";
    testa_escopo();
?>