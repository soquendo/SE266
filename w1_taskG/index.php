<?php

//import functions page
require 'functions.php';

//dd($num);
//for loop, looping through to 100
for ($x = 1; $x <=100; $x++){
    echo fizzBuzz($x) . "<br/>";
}


//import index.view page
require 'index.view.php';
