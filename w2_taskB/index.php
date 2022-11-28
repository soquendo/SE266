<?php

require 'patient.php';

//determine age
function dob ($birthdate){
    $date = new DateTime($birthdate);
    $now = new DateTime();
    $age = $now->diff($date);
    return $age->y;
}

//checking for future date
function validDate ($date){
    $start = new DateTime($date);
    $now = new DateTime();
    
    if($start > $now){
        return true;
    } else {
        return false;
    }
}

//calc bmi
function bmi ($inch, $lbs){
    //converting inches to meters
    $hgt = $inch * 0.0254;

    //pounds to kg
    $wgt = $lbs / 2.20462;

    //calc bmi
    $mass = $wgt / ($hgt * $hgt);

    //return mass
    return $mass;
}

//assigning variable for errors
$feedback = "";

//concatenation "info" var
$info = "";


//submit button
if(isset($_POST['submitbtn'])){

    //retrieve first name
    $fname = filter_input(INPUT_POST, 'fname');
    
    //do not allow blank entry
    if($fname == ""){
        //error message if blank, add msg to feedback
        $feedback .= "ERROR: Must enter first name to proceed<br>";
    } else {
        //add entered value to info
        $info .= "<b>Name:</b>" . $fname . " ";
    }
    
}