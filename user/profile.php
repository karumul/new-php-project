<?php

session_start();

if(empty($_SESSION['user_email']))
{
  header("Location:../index.php");   
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="CSS/profile.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Mukta&family=Zen+Kaku+Gothic+Antique:wght@900&display=swap" rel="stylesheet">

  <!--Fa fa CDN-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Bootstrap CDN-->


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

 
</head>
<body>




<div class="main">




<h1>welcome to profile !</h1>









</div>

  

<!--Link all JS File -->
<script src="JS/profile.js"></script>
</body>
</html>