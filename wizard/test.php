



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" type = "text/css" href="test.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Ask the wizard</title>
</head>
<body >

<div id="center">
<h1 class = "bg-primary"><span class = "text-light">Welcome to THE WIZ beta </span><span class = "text-success"></span></h1> 
 <form id = "user" action="test.php" method = "post">
    <b>Name: <input class = "indata" type="text" name = "Username"/></b>
    <input class = "wbtn1" type="submit" name = "submit" value = "Submit"/>
</form>
</div>

<hr class = "bg-dark">

<div id="wizkid">

<form action="test.php" method = "post">
<p><b>Ask the wizard: <input class = "indata" type="text" name = "wiz"></b>
<input class = "wbtn2" type="submit" name = "wizsub" value = "Submit"/></p>
<br>
</form>




<?php
//random answers generated when question is submitted.
  $answers = rand(0,7);
  $randAns = array (
    "<b class = 'text-danger'> I doutb it... But good luck with that.</b>",
    "<b class = 'text-danger'> SMDH!</b>",
    "<b class = 'text-success'> YES!</b>",
    "<b class = 'text-success'> I wouldn't bet against it.</b>",
    "<b class = 'text-danger'> Dont hold your breath!</b>",
    "<b class = 'text-success'> That's right.</b>",
    "<b class = 'text-danger'> Quit playing yourself!</b>",
    "<b class = 'text-success'> In due time.</b>");

  if(isset($_POST['wizsub'])){
    echo  $_POST["wiz"];
    echo  $randAns[$answers];
  }

?>



  </div>
</body>
</html>
