<?php
    function binToDec($bin) {
        if (!is_int($bin) || $bin < 0) {
            echo "Введите целое положительное число";
        } else if ($bin === 0) {
            echo 0;
        } else {
            $dec = 0;
            $pow = strlen($bin) - 1;
            $binArray = str_split($bin);        
            for ($i = 0; $i < strlen($bin); $i++) {
                $dec = $dec + $binArray[$i] * 2 ** $pow;
                $pow--;          
            }
        echo $dec;
        }        
    }
    binToDec(10001);
?>