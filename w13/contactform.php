<?php

$fname=$_POST['fname'];
$email=$_POST['email'];
$mobn=$_POST['mobn'];
$subject=$_POST['subject'];
$data=$fname.",".$email.",".$mobn.",".$subject;


$file="cform.csv";


file_put_contents($file, $data . PHP_EOL, FILE_APPEND);

// print "<h1 align=center>Thank you for submitting your email address!</h1>";


?>

<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>DREAM ARCHITECTURE | Thank You</title>
        <link rel="icon" href="img/1234.jpg" />

        <style>
            *{
                font-family: sans-serif;
            }
            body{
                background-color: rgb(81,81,81);
            }
            .note{
                margin-top: 10%;
            }
            .note i{
                text-align: center;
                margin-left: 45%;
                font-size: 170px;
                color: rgb(0, 114, 0);
            }
            .note h1{
                font-size: 300%;
                text-align: center;
                text-transform: capitalize;
            }
            .note p{
                font-size: 100%;
                text-align: center;
                text-transform: capitalize;
                margin-bottom: 50px;
            }
            .back-btn a{
                text-decoration: none;
                color: white;
                margin-left: 46%;
                background-color: black;
                padding: 1%;
                border-radius: 4px;
            }
            
            .back-btn a:hover{
                background-color: aliceblue;
                color: black;
            }
        </style>
    </head>
    <body>
        <div class="note">
            <i class="fa fa-check-circle" ></i>
            <!-- <i class="fa fa-check-circle-o"></i> -->

            <h1>thankyou for your response.</h1>
            <p>your response has been collected we will contact you soon...!!!</p>
        </div>
        <div class="back-btn">
            <a href ="contact.html">GET BACK</a>
        </div>
    </body>
</html>