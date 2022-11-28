<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Intake Form</title>
    <style>
        .lite{
            font-weight: lighter;
        }

        .form{
            font-weight: bold;
        }

        
    </style>
</head>
<body>
    <h2>Patient Intake Form</h2>
    <div class="form">
        <form name="patient" method="post" action="patient.php">
            First Name:
            <input type="text" name="first_name" placeholder="Enter First Name"> <br />

            Last Name:
            <input type="text" name="last_name" placeholder="Enter Last Name"> <br />

            Married: 
            <input type="radio" value="Yes" name="married" class="lite">Yes
            <input type="radio" value="No" name="married" class="lite">No<br />

            Conditions:
            <input type="checkbox" value="High Blood Pressure" name="conditions" class="lite">High Blood Pressure
            <input type="checkbox" value="Diabetes" name="conditions" class="lite">Diabetes
            <input type="checkbox" value="Heart Condition" name="conditions" class="lite">Heart Condition<br />

            Birth Date:
            <input type="date" name="birth_date"><br />

            Height:
            Feet: 
            <input type="text" value="ft" name="ft" style="width:40px;" class="lite"/>
            Inches:  
            <input type="text" value="inch" name="inches" style="width:40px;" class="lite"> <br />
            Weight (lbs):
            <input type="text" value="wgt" name="weight" style="width:40px;"> <br />

            &nbsp;

            <input type="submit" name="storePatient" value="Store Patient Information">



        </form>
    </div>
    
</body>
</html>