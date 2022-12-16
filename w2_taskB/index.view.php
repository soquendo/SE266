<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebastian Oquendo | W2:TaskB </title>
    <style>
        .form{
            border: solid black 1px;
            width: 500px;
            padding-left: 20px;
            background-color: #DEDEDE;
            line-height: 2;
            
        }
    </style>
</head>
<body>
    <?php require "../header.php" ?> 
    <h1>Patient Intake</h1>
    <div class="form">
        <form action="index.php" method="post">
            <label>Name:</label>
            <input type="text" name="fname" placeholder="First"/>
            <input type="text" name="lname" placeholder="Last"/>

            <br>

            <label>Marital Status:</label>
            <input type="radio" value="Single" name="status"/>Single
            <input type="radio" value="Married" name="status"/>Married
            <br>

            <!-- <label>Conditions:</label>
            <input type="checkbox" value="High Blood Pressure" name="conditions" value="Yes">High Blood Pressure
            <input type="checkbox" value="Diabetes" name="conditions" value="Yes">Diabetes
            <input type="checkbox" value="Heart Condition" name="conditions" value="Yes">Heart Condition<br /> -->

            <label>Date of Birth:</label>
            <input type="date" name="dob" />
            <br>
            <label>Height:</label>
            <input type="text" name="height" placeholder="inches"/>
            <br>
            <label>Weight:</label>
            <input type="text" name="weight" placeholder="lbs"/>
            <br>
            <input type="submit" name="submitbtn" />
    </form>

    </div>
</body>
<?php require "../footer.php" ?> 
</html>
