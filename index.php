<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="styles.css" />
    <title>Sebastian Oquendo | SE266</title>
    <style>
        body {
        font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
        overflow: hidden;
        background-color: #333;
        }

        .navbar a {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        .dropdown {
        float: left;
        overflow: hidden;
        }

        .dropdown .dropbtn {
        font-size: 16px;  
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
        background-color: blue;
        }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
        }

        .dropdown-content a:hover {
        background-color: #0000FF;
        }

        .dropdown:hover .dropdown-content {
        display: block;
        }
    </style>
</head>
<body>
    <?php require "header.php";?>
    </div>
    <h1>Sebastian Oquendo</h1>
    <p><b>SE266</b>: PHP and MySQL</p>
    <div>
        <h3>Assignments</h3>
        <ul>

            <li>
                <a href="..\SE266\w1_taskC\index.php">Week 1 - Task C: Basic PHP & Arrays </a>
            </li>

            <li>
                <a href="..\SE266\w1_taskD\index.php">Week 1 - Task D: Associated Arrays</a>
            </li>

            <li>
                <a href="..\SE266\w1_taskE\index.php">Week 1 - Task E: Booleans and Conditionals</a>
            </li>

            <li>
                <a href="..\SE266\w1_taskF\index.php">Week 1 - Task F: Functions</a>
            </li>

            <li>
                <a href="..\SE266\w1_taskG\index.php">Week 1 - Task G: Fizz Buzz</a>
            </li>

            <li>
                <a href="..\SE266\w2_taskB\index.php">Week 2: Patient Intake</a>
            </li>

            <li>
                <a href="..\SE266\w3_atm\index.php">Week 3: ATM</a>
            </li>

            <li>
                <a href="..\SE266\w4_patient\index.php">Week 4: Patient List</a>
            </li>

            <li>
                <a href="..\SE266\w6_search\index.php">Week 6: Patient Search</a>
            </li>

            <li>
                <a href="..\w7_school\index.php">Week 7: School Reference Database</a>
            </li>

            <li>
                <a href="..\w9_final\index.php">Week 9: Final Project</a>
            </li>

        </ul>
    </div>
    <div class="footer">
        <?php require "footer.php";?>
    </div>
</body>
</html>