<?php
// connection to db settings
require('config.php'); 
 $output = '';  
 $dept = $_POST["the_dept"];
 $level = $_POST["the_level"];
 $semester = $_POST["the_semester"];

echo("<script>console.log('PHP: ".$dept."');</script>");

// checking every possible combination of filters
if($dept != '' && $level != '' && $semester != '')  
{  
      $sql = "SELECT * FROM product WHERE dept = '$dept' AND level = '$level' AND semester = '$semester'";
}
else if($level != '' && $semester != '')  
{  
      $sql = "SELECT * FROM product WHERE level = '$level' AND semester = '$semester'";
}
else if($dept != '' && $semester != '')  
{  
      $sql = "SELECT * FROM product WHERE dept = '$dept' AND semester = '$semester'";
}
else if($dept != '' && $level != '')  
{  
      $sql = "SELECT * FROM product WHERE dept = '$dept' AND level = '$level'";
}
else if($dept != '')  
{  
      $sql = "SELECT * FROM product WHERE dept = '$dept'";
}
else if($semester != '')  
{  
      $sql = "SELECT * FROM product WHERE semester = '$semester'";
}
else if($level != '')  
{  
      $sql = "SELECT * FROM product WHERE level = '$level'";
}
else
{  
      $sql = "SELECT * FROM product";
}


$result = mysqli_query($connect, $sql); 

if($result === false){
  // do nothing
  echo("<script>console.log('PHP: sql failed');</script>");
}
else {
  while($row = mysqli_fetch_array($result))  
  {  
       $output .= '<div class="col-md-3">';  
       $output .= '<div id="'.$row["code"].'" class="generateTable" style="border: 1px solid #ccc;padding: 0 10px;margin-bottom: 20px;min-width: 150px;"><h4>'.$row["code"].'</h4><p>'.$row["title"].'</p>';  
       $output .=     '</div>';  
       $output .=     '</div>';
  }  
  
}
echo $output;  

?>  