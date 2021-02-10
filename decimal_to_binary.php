<?php
    function decToBin($dec) {       
        $bin = [];
        if (!is_int($dec) || $dec < 0) {
            echo "Введите положительное целое число";
        } else if ($dec === 0) {
            echo 0;            
        } else {
            $rem = 0;
            while ($dec > 0) {
                $rem = $dec % 2;
                $dec = ($dec - $rem) / 2;
                array_unshift($bin, $rem);                              
            }            
        }    
        echo implode("", $bin);                           
    }    
    decToBin(22); 
?>