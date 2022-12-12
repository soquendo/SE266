<?php

function emptyCheck($target){  //check if entry is blank
    if(empty($target)){     //if empty
        $error = "Please enter all fields.";    //error message
        return $error;  //return error message
    }
    else{
        return $target; //else return variable being checked if good
    }
}

//determine age
function age ($birthDate) {
    $inputDate = new DateTime($birthDate);
    $now = new DateTime();
    $interval = $now->diff($inputDate);
    return $interval->y;
}

//checking for valid future date
function future ($date){
    $start = new DateTime($date);
    $now = new Datetime();
    if($start > $now){
        return true;
    } else{
        return false;
    }
 }

//calc bmi
function bmi ($inch,$lbs){
    //converting inches to meters
    $h = $inch * 0.0254;
    //converting pounds to kg
    $w = $lbs / 2.20462;
    //calculating bmi
    $m = $w / ($h * $h);
    //return results
    return $m;
}

//setting up var for errors
$feedback = "";
//var to concat info to
$info = "";

//submit button hit
if(isset($_POST['submitbtn'])){
    //getting first name from form
    $fname = filter_input(INPUT_POST, 'fname');
    //checking to see if field was left blank
    if($fname == ""){
        //if blank then add error msg to feedback var
        $feedback .= "ERROR: First name can not be left blank!<br>";
    } else{
        //if not blank then add name to info var
        $info .= "<b>Name:</b> " . $fname . " ";
    }

    //RETRIEVE last name
    $lname = filter_input(INPUT_POST, 'lname');
    //checking if blank
    if($lname == ""){
        //blank = error msg
        $feedback .= "ERROR: Last name can not be left blank!<br>";
    } else{
        //if not blank then add to info var
        $info .= $lname . "<br>";
    }
    
    //getting marital status
    $status = filter_input(INPUT_POST, 'status');
    //checking there has been a selection
    if($status == ""){
        //no selection adds error msg to feedback
        $feedback .= "ERROR: Please select Marital Status<br>";
    } else{
        //else add status to info
        $info .= "<b>Marital Status:</b> " . $status . "<br>";
    }

    //retrieve conditions
    $conditions = filter_

    //RETRIEVE DATE OF BIRTH
    $dob = filter_input(INPUT_POST, 'dob');
    if($dob == ""){
        //checking to see if there was a date entered
        $feedback .= "ERROR: D.O.B can not be blank<br>";
    } else{
        //calling future func to see if the date is in the future.
        if(future($dob)){
            $feedback .= "ERROR: D.O.B can not be a future date<br>";
        } else{
            //if is past date then add date of birth and calculate age and add both results to info
            $info .= "<b>D.O.B:</b> " . $dob . "<br><b>Age:</b> " . age($dob);
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
    }
} else{
    echo"Intial Load of Form";
}
require "index.view.php";



