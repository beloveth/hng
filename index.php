<!DOCTYPE html>
<html>
<head>
<title> current time</title>
<link rel ="stylesheet" type ="text/css" href ="css.css"/>
</head>
<body>
<div class="background">
<div class = "frame">
  <div class = "hng_bg"> </div>
  <p class="hng">HNG Internship 4</p>
<div class="stage_bg"> </div>
<p class= "stage">stage1</p>

<div class= "date_bg"></div>   
<p class="date">
    <?php
        date_default_timezone_set("Nigeria/Lagos");
        
          echo "Today is " . date("l-d-m-Y") . "<br>";
           "<br>";
          echo "Current time is " . date("h:i:sa"); 
?></p>


<p class="dbeloveth">@dbeloveth</p>
</div>

</div>

</body>
</html>