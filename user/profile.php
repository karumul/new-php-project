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

 <script src="js/ajax.js"></script>
</head>
<body>




<div class="main">


<!-- Dashboard coding -->
<div class="sidebar bigger" id="side_bar">




<div class="dashboard">
    <div style="width:100%;height:auto;">
    <span class="dashboard_txt" id="dashboard_txt">Dashboard</span><i class="fa fa-bars bar_icon" aria-hidden="true" id="bar_icon"></i>
    </div>
  </div>
  <!--Start menu item coding-->
 

  <div class="home active" id="active">
  <div style="width:100%;height:auto;">
    <a class=" active" data-toggle="tab" href="#home">
    <i class="fa fa-h-square home_icon" id="home" style="font-size:18px;" aria-hidden="true"></i><span class="home_txt" id="home_txt">home</spn>
    </a>

</div>
  </div>


  <div class="services active" >
  <div style="width:100%;height:auto;">
  <a class=" active" data-toggle="tab" href="#services">
    <i class="fa fa-universal-access services_icon" style="font-size:18px;" aria-hidden="true"></i><span class="services_txt" id="service_txt">services</spn>
</a>
  </div>
  </div>


  <div class="products active" >
  <div style="width:100%;height:auto;">
  <a class=" active" data-toggle="tab" href="#products">
    <i class="fa fa-product-hunt products_icon" style="font-size:18px;" aria-hidden="true"></i><span class="products_txt" id="product_txt">products</spn>
  </a>
  </div>
  </div>


  <div class="appointment active" >
  <div style="width:100%;height:auto;">
  <a class="active" data-toggle="tab" href="#appointment">
    <i class="fa fa-chain-broken appointment_icon" style="font-size:18px;" aria-hidden="true"></i><span class="appointment_txt" id="appointment_txt">book appointment</spn>
</a>
  </div>
  </div>

  <div class="consult active" >
  <div style="width:100%;height:auto;">
  <a class=" active" data-toggle="tab" href="#consult">
    <i class="fa fa-graduation-cap consult_icon" style="font-size:18px;" aria-hidden="true"></i><span class="consult_txt" id="consult_txt">consult</spn>
</a>
  </div>
  </div>

  <div class="contact active" >
  <div style="width:100%;height:auto;">
  <a class=" active" data-toggle="tab" href="#contact">
  <i class="fa fa-compress contact_icon" style="font-size:18px;" aria-hidden="true"></i><span class="contact_txt" id="contact_txt">contact</spn>
</a>
</div>
  </div>
</div>
<!--End dashboard coding-->




<div class="menu_content py-4"  id="menu_content">




<!--start crud coding-->
<div class="row py-4 m-0">
  <div class="col-md-9">
    <div class="d-flex justify-content-around">
<h1 class="p-0 m-0">CRUD Operation</h1>
<button class="btn btn-primary px-4 remove-focus add-data">Add Data</button>
</div>
<br><br>
<!--show data in table-->
<div>
  <table class="table">
   
  </table>
</div>

  </div>
  <div class="col-md-3"></div>
</div>



<!--Form modal-->

<!-- The Modal -->
<div class="form-modal modal animate__animated animate__slideInDown animate__faster" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Class teacher</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form class="submit-form">
         <div class="form-group">
           <label>Name</label>
           <input type="text" name="name" class="form-control remove-focus" placeholder="Enter name" >
         </div>

         <div class="form-group">
           <label>Mobile</label>
           <input type="number" name="mobile" class="form-control remove-focus" placeholder="Enter mobile" >
         </div>

         <div class="form-group">
           <label>Age</label>
           <input type="number" name="age" class="form-control remove-focus" placeholder="Enter age" >
         </div>

         <div class="form-group">
           <label>Subject</label>
           <input type="text" name="subject" class="form-control remove-focus" placeholder="Enter name" >
         </div>


         <div class="form-group">
          <button class="btn btn-primary remove-focus submit-btn" type="submit">Submit</button>
         </div>


       </form>
      </div>

     

    </div>
  </div>
</div>










<!--
<div class="container pt-5 float-left border-top">
  <div class="row p-2 ">
    <div class="col-md-6 shadow p-4 h-50" style="border-top:2px solid #102AAE;">
      <p>Menu item</p>
    <form>
    <select class="form-select mb-4" id="set_select_menu">
  <option value="select_menu">Select menu</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
</select>
<div id="dynamic_input_div"></div>
</form>
    </div>
    <div class="col-md-6"></div>
  </div>
</div>-->







</div>







</div>

  

<!--Link all JS File -->
<script src="JS/profile.js"></script>
</body>
</html>