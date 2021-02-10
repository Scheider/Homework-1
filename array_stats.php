<?php
    // Проверяем простое ли число
    function isPrime($num) {
        for ($i = 2; $i <= sqrt(abs($num)); $i++) {
            if ($num % $i == 0) {
                return false;
            }           
        }
        return true;
    }
    // Статистика массива
    function arrayStats($array) {
        $arrayLength = count($array);
        $positiveNumber = 0;
        $negativeNumber = 0;
        $zero = 0;
        $primeNumber = 0;        
        foreach ($array as $number) {
            if ($number < 0) {
                $negativeNumber++;
            } else if ($number === 0) {
                $zero++;
            } else {
                $positiveNumber++;
            } 
            if (isPrime($number)) {
                $primeNumber++;
            }        
        }
        echo "Всего чисел: {$arrayLength}\n"
            . "Из них:\n"
            . "Положительных " . round(($positiveNumber / $arrayLength) * 100, 2) . "%\n"
            . "Отрицательных " . round(($negativeNumber / $arrayLength) * 100, 2) . "%\n"
            . "Нулевых " . round(($zero / $arrayLength) * 100, 2) . "%\n"
            . "Простых " . round(($primeNumber / $arrayLength) * 100, 2) . "%";        
    }
    
    arrayStats([3, 0, -12, 11, 12, 13, -4, 0, 325, 333, 124, -54, 0]);
?>
