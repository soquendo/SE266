<?php

//fizzbuzz function accepts just the $num parameter
function fizzBuzz($num){
   
    if ($num % 2 == 0 and $num % 3 == 0){
        echo "fizzBuzz";}
    elseif ($num % 3 == 0){
        echo "buzz";}
    elseif ($num % 2 == 0){
        echo "fizz";}

    else { echo $num; }
        //die(var_dump($num));

    }



