
<?php
/*Login user*/
//include_once "api/config.php";
// if(!isset($_SESSION['access_token']))
// {
//     $google_login_btn = '<a class="g_s_link" href="'.$google_client->createAuthUrl().'">Signup with google</a>';
// }
// else
// {
//     $google_login_btn =  "User login";
// }
// ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://apis.google.com/js/platform.js" async defer></script>


  <link rel="stylesheet" href="style/index.css">
  <!--Font awesome icon-->
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <!--google font-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Mukta&family=Zen+Kaku+Gothic+Antique:wght@900&display=swap" rel="stylesheet">


       
<style>

   




</style>


</head>
<body>



<header>
    <div class="header_cont">
        <div class="inner_header_cont">
        
            <div style="" class="logo">LOGO</div>
            <button class="login" id="login_signup">Signup</button>
        </div>
    </div>
</header>

<section>


<div class="form_cont" id="dynamic_form_cont">
<form class="signup_form"  autocomplete="off">
        <h4 class="login_txt">Login</h4>
            <input type="email" placeholder="Enter your email" name="email" class="email" id="email">
            <input type="password" placeholder="Password" name="password" class="password" id="password">
            <input type="password" placeholder="Con password" name="con_password" class="con_password" id="con_password">
            <input type="submit" id="login_btn">
        </form>
     
       <hr style="background-color:#ddd;margin-bottom:4px;">
      <h6 align="center" style="font-family:roboto;word-spacing:2px;letter-spacing:2px;font-size:12px;">let's create your resume !</h6>
</div>







</sction>

<footer></footer>



<script src="JS/signup.js"></script>
<script src="JS/index.js"></script>  
<script src="JS/login.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>



<!--Start toast coding-->
<div class="toast">
    <div class="toast-header">
        <div class="float-right text-right" style="width:100%;">
       <span id="close_toast">Close</span>
</div>
    </div>
    <div class="toast-body" id="toast_notice">
   
    </div>
</div>
<!--End toast coding !-->





</body>
</html>



