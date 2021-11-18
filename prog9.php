<?php 
    class teste {
        function Saudacao() {
            echo "Oi pessoal";
        }
    }

    $objeto = new teste; // $objeto se torna uma estância da classe teste
    $objeto->Saudacao();
?>
