<?php

$connect = mysqli_connect("localhost", "root", "", "websitedata");
function make_query($connect)
{
 $query = "SELECT * FROM slider_images ORDER BY id ASC";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_slide_indicators($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
  $output .= '
   <img class="w-100" src="assets/images/slider/'.$row["image_name"].'" alt="'.$row["image_name"].'" style="height 300; width 100%;"/>
   <div class="carousel-caption">
    
   </div>
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}

?>

 
 
  <!--<div class="container" width="100%">-->
   
   
   <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel" >
    <ol class="carousel-indicators carousel-indicators-custom">
    <?php echo make_slide_indicators($connect); ?>
    </ol>

    <div class="carousel-inner" style="object-fit:cover;">
     <?php echo make_slides($connect); ?>
    </div>
    <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
    </a>

   </div>
  
