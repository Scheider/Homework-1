<?php
    function fibo($n) {
        $fiboNum = 0;
        $firstNum = 0;
        $secondNum = 1;      
        for ($i = 0; $i < $n; $i++) {                       
            $fiboNum = $firstNum + $secondNum;
            $firstNum = $secondNum;
            $secondNum = $fiboNum;                
        }
        echo $fiboNum;
    }
    fibo(7);
?>