<?php

function fizzBuzz($num){

    for ($num = 0; $num <=100; $num++){

        if (($num + 1) % 2 == 0 and ($num + 1) % 3 == 0)
            echo "fizzBuzz";
        elseif (($num + 1) % 3 == 0)
            echo "buzz";
        elseif (($num + 1) % 2 == 0)
            echo "fizz";

        else 
            echo '<pre>';

            die(var_dump($num));

            echo '</pre>';


    }

}



