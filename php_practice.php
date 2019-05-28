<?php

    // 問題１
    for ($i=100; $i > 0 ; $i--) { 
        echo $i . '<br>';
    }

    // 問題２
    for ($i=1; $i < 10; $i++) { 
        echo $i * 3 . ' ';
    }

    echo "<br>";

    //問題３
    for ($i=1; $i <= 100 ; $i++) { 
        if ($i % 3 === 0 &&  $i % 5 === 0) {
            echo "FizzBuzz" . '<br>';
        }elseif ($i % 3 === 0) {
            echo "Fizz" . '<br>';
        }elseif ($i % 5 === 0) {
            echo "Buzz" . '<br>';
        }else{
            echo $i . '<br>';
        }
    }

    //問題４
    for ($i=1; $i <= 100 ; $i++) { 
        echo $i.' ';
        if($i % 10 === 0){
            echo "<br>";
        }
    }

    //問題５
    $alpha = ['E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C'];

    $i = 0;

    foreach ($alpha as $v) {
        if ($v === 'A') {
            $i++;
        }
    }

    echo $i .'<br>';


    //問題６
    $english = 70; //英語の点数
    $math = 70; //数学の点数
    $all = $english + $math;

    if ($english >= 60 && $math >= 60 && $all >= 140) {
        echo '合格！';
    }else{
        echo '残念！';
    }

    echo "<br>";

    //問題７
    for ($i=1; $i <= 9; $i++) { 
        for ($j=1; $j <=9 ; $j++) { 
            $res = $i * $j . ' ';
            echo $res ;
        }
        echo "<br>";
    }

    //問題８
    $prinmeNumbers = [];

    for ($i=2; $i < 100 ; $i++) { 
        for ($j=2; $j <= $i ; $j++) { 
            if ($i % $j === 0 && $j < $i) {
                break;
            }

            if ($i === $j) {
                $prinmeNumbers[] = $i;
            }
        }
    }

    print_r($prinmeNumbers);

















