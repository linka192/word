<?php
    function calculator($a, $b, $operation) {

    switch ($operation){
        case '+':
        $c = $a + $b;
        echo $c;
        break;
        case '-':
        $c = $a - $b;
        echo $c;
        break;
        case '*':
        $c = $a * $b;
        echo $c;
        break;
        case '/':
         if ($a == 0 || $b == 0) {
                echo 'Ошибка: на ноль делить нельзя';
        }else{
            $c = $a / $b;
            echo $c;
        break;
        }
        default:
            echo 'Ошибка: неизвестная операция';
        }
    };
     echo calculator(7, 6, '*');
