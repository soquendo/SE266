<?php

//connect to patient file
require 'patient.php';

//determine age
function dob ($birthdate){
    $date = new DateTime($birthdate);
    $now = new DateTime();
    $age = $now->diff($date);
    return $age->y;
}

//checking for valid future date
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

//assign var for info
$info = "";


//submit button action
if(isset($_POST['submitbtn'])){

    //RETRIEVE first name
    $fname = filter_input(INPUT_POST, 'fname');
    //do not allow BLANK ENTRY
    if($fname == ""){
        //error message IF BLANK, add msg to feedback
        $feedback .= "ERROR: Must enter first name to proceed<br>";
    } else {
        //add entered value to info
        $info .= "<b>Name:</b>" . $fname . " ";
    }
    
    //RETRIEVE last name
    $lname = filter_input(INPUT_POST, 'married');
    //MUST make selection
    if($married == ""){
        //unchecked creates ERROR for feedback
        $feedback .= "ERROR: Must make a selection<br>";
    } else {
        //add married status to info
        $info .= "<b>Married:</b>" . $married . "<br>";
    }

    //RETRIEVE DATE OF BIRTH
    $dob = filter_input(INPUT_POST, 'dob');
    if($dob == ""){
        //verify date was entered, post to feeback
        $feedback .= "ERROR: Must enter date of birth<br>";
    } else {
        //checking for valid date with validDate function
        if(validDate($dob)){
            $feedback .= "ERROR: Date of birth cannot be a future date<br>";
        } else {
            //past date will calculate age and pass to info
            $info .= "<b>Date of birth:</b> " . $dob . "<br><b>Age:</b>" . age($dob);
        }
    }

    
    //HEIGHT
    $height = filter_input(INPUT_POST, 'height', FILTER_VALIDATE_FLOAT);
    if($height == ""){
        $feedback .= "ERROR: Must enter height<br>";
    } else {
        if($height < 0 || $height > 150){
            $feedback .= "Error: please enter valid height<br>";
        } else {
            $info .= "<br><b>Height:</b> $height";
        }
    }
    

    //WEIGHT
    $weight = filter_input(INPUT_POST, 'weight', FILTER_VALIDATE_FLOAT);
    if($weight == ''){
        $feedback .= "ERROR: Field cannot be left blank<br>";
    } else {
        if ($weight < 0 || $weight > 999){
            $feedback .= "ERROR: Please enter a valid number (1-999)<br>";
        } else {
            $info .= "<br><b>Weight:</b> $weight";
        }
    }

    $bmiRes = bmi($height,$weight);
    $bmi = "";

    if($bmiRes < 18.5){
        $bmi = "Underweight";
    } elseif ($bmiRes >= 18.5 && $bmiRes < 25) {
        $bmi = "Adequate Weight";
    } elseif ($bmiRes >= 25 && $bmiRes < 30) {
        $bmi = "Overweight";
    } else {
        $bmi = "Obese";
    }

    $bmiRes = round($bmiRes, 1);
    $info .= "<br><b>BMI:</b> $bmiRes";
    $info .= "<br><b>BMI class:</b> $bmi";

    //< 18.5        underweight
    //18.5-24.9     normal
    //25.0-29.9     overweight
    //30 >          obese

    if(str_contains($feedback, 'ERROR:')){
        echo $feedback;
    } else {
        //if there's no feedback, echo out the info
        echo "<h1>Patient Information</h1>$info";
    } //else {
        //echo "Initial Load of Form";
    //}

}


