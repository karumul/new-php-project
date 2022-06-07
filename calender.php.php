<?php


$date_one =[];
$date_two =[];
$date_three = [];
$date_four = [];
$date_five = [];
$date_six = [];
$date_seven = [];
$date_eight = [];
$date_nine = [];
$date_ten = [];
$date_eleven = [];
$date_twelve = [];
for($i =1;$i<=12;$i++)
{
     $days = cal_days_in_month(CAL_GREGORIAN,$i,2021);
     echo "<h3>".$days."</h3>";
     for($j =1;$j<=$days;$j++)
     {
      // $date =  $j;
      if($i==1)
{
    array_push($date_one,$j);
}
elseif($i==2)
{
    array_push($date_two,$j);
}

elseif($i==3)
{
    array_push($date_three,$j);
}

elseif($i==4)
{
    array_push($date_four,$j);
}
elseif($i==5)
{
    array_push($date_five,$j);
}
elseif($i==6)
{
    array_push($date_six,$j);
}
elseif($i==7)
{
    array_push($date_seven,$j);
}
elseif($i==8)
{
    array_push($date_eight,$j);
}
elseif($i==9)
{
    array_push($date_nine,$j);
}
elseif($i==10)
{
    array_push($date_ten,$j);
}
elseif($i==11)
{
    array_push($date_eleven,$j);
}
elseif($i==12)
{
    array_push($date_twelve,$j);
}
      
     }
    
}


//echo $days;






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container bg-info" style="height:auto;">
    <h1 class="text-center">2021</h1>
<div class="row">
    <div class="col-md-4 bg-success" style="height:300px;">
<?php

if($date_one)
{
echo "<h3>January</h3>";
}
//echo count($date);
for($k=0;$k<count($date_one);$k++)
{
   echo  "<span style='width:30px;height:30px;border-radius:50%;border:1px solid black;float:left;display:flex;flex-wrap:wrap;margin:8px;justify-content:center;align-items:center; '>".$date_one[$k]."</span>";
}

?>
    </div>
    <div class="col-md-4 bg-success" style="height:300px;">

    <?php
//echo count($date);
if($date_two)
{
echo "<h3>February</h3>";
}
for($k=0;$k<count($date_two);$k++)
{
   echo  "<span style='width:30px;height:30px;border-radius:50%;border:1px solid black;float:left;display:flex;flex-wrap:wrap;margin:8px;justify-content:center;align-items:center; '>".$date_two[$k]."</span>";
}

?>


    </div>
    <div class="col-md-4 bg-success" style="height:300px;">
    <?php
//echo count($date);
if($date_three)
{
echo "<h3>March</h3>";
}
for($k=0;$k<count($date_three);$k++)
{
   echo  "<span style='width:30px;height:30px;border-radius:50%;border:1px solid black;float:left;display:flex;flex-wrap:wrap;margin:8px;justify-content:center;align-items:center; '>".$date_three[$k]."</span>";
}
?>
    </div>

</div>


<div class="row">
    <div class="col-md-4 bg-success" style="height:300px;">
<?php


//echo count($date);
if($date_four)
{
    echo "<h3>April</h3>";
}
for($k=0;$k<count($date_four);$k++)
{
   echo  "<span style='width:30px;height:30px;border-radius:50%;border:1px solid black;float:left;display:flex;flex-wrap:wrap;margin:8px;justify-content:center;align-items:center; '>".$date_four[$k]."</span>";
}

?>
    </div>
    <div class="col-md-4 bg-success" style="height:300px;">

    <?php
//echo count($date);
if($date_five)
{
echo "<h3>May</h3>";
}
for($k=0;$k<count($date_five);$k++)
{
   echo  "<span style='width:30px;height:30px;border-radius:50%;border:1px solid black;float:left;display:flex;flex-wrap:wrap;margin:8px;justify-content:center;align-items:center; '>".$date_five[$k]."</span>";
}

?>


    </div>
    <div class="col-md-4 bg-success" style="height:300px;">
    <?php
//echo count($date);
if($date_six)
{
echo "<h3>June</h3>";
}
for($k=0;$k<count($date_six);$k++)
{
   echo  "<span style='width:30px;height:30px;border-radius:50%;border:1px solid black;float:left;display:flex;flex-wrap:wrap;margin:8px;justify-content:center;align-items:center; '>".$date_six[$k]."</span>";
}
?>
    </div>

</div>


<div class="row">
    <div class="col-md-4 bg-success" style="height:300px;">
<?php


//echo count($date);
if($date_seven)
{
echo "<h3>July</h3>";
}
for($k=0;$k<count($date_seven);$k++)
{
   echo  "<span style='width:30px;height:30px;border-radius:50%;border:1px solid black;float:left;display:flex;flex-wrap:wrap;margin:8px;justify-content:center;align-items:center; '>".$date_seven[$k]."</span>";
}

?>
    </div>
    <div class="col-md-4 bg-success" style="height:300px;">

    <?php
//echo count($date);
if($date_eight)
{
echo "<h3>August</h3>";
}
for($k=0;$k<count($date_eight);$k++)
{
   echo  "<span style='width:30px;height:30px;border-radius:50%;border:1px solid black;float:left;display:flex;flex-wrap:wrap;margin:8px;justify-content:center;align-items:center; '>".$date_eight[$k]."</span>";
}

?>


    </div>
    <div class="col-md-4 bg-success" style="height:300px;">
    <?php
//echo count($date);
if($date_nine)
{
echo "<h3>September</h3>";
}
for($k=0;$k<count($date_nine);$k++)
{
   echo  "<span style='width:30px;height:30px;border-radius:50%;border:1px solid black;float:left;display:flex;flex-wrap:wrap;margin:8px;justify-content:center;align-items:center; '>".$date_nine[$k]."</span>";
}
?>
    </div>

</div>



<div class="row">
    <div class="col-md-4 bg-success" style="height:300px;">
<?php


//echo count($date);
if($date_ten)
{
echo "<h3>October</h3>";
}
for($k=0;$k<count($date_ten );$k++)
{
   echo  "<span style='width:30px;height:30px;border-radius:50%;border:1px solid black;float:left;display:flex;flex-wrap:wrap;margin:8px;justify-content:center;align-items:center; '>".$date_ten[$k]."</span>";
}

?>
    </div>
    <div class="col-md-4 bg-success" style="height:300px;">

    <?php
//echo count($date);
if($date_eleven)
{
echo "<h3>November</h3>";
}
for($k=0;$k<count($date_eleven);$k++)
{
   echo  "<span style='width:30px;height:30px;border-radius:50%;border:1px solid black;float:left;display:flex;flex-wrap:wrap;margin:8px;justify-content:center;align-items:center; '>".$date_eleven[$k]."</span>";
}

?>


    </div>
    <div class="col-md-4 bg-success" style="height:300px;">
    <?php
//echo count($date);
if($date_twelve)
{
echo "<h3>December</h3>";
}
for($k=0;$k<count($date_twelve);$k++)
{
   echo  "<span style='width:30px;height:30px;border-radius:50%;border:1px solid black;float:left;display:flex;flex-wrap:wrap;margin:8px;justify-content:center;align-items:center; '>".$date_twelve[$k]."</span>";
}
?>
    </div>

</div>

</div>
    
</body>
</html>