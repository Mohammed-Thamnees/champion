<?php

include("connection.php");
$evt=$_GET['gender'];

  $buffer="<select name='select' id='select'>
  <option value='0'>SELECT</option>";
$r=mysqli_query($con,"select * from events where gender='$evt'");

if (mysqli_num_rows($r)>0)
{
while($row=mysqli_fetch_array($r)){
    $buffer = $buffer."<option value='".$row[0]."'>".$row[1]."</option>";
}
}
$buffer = $buffer."</select>";
echo $buffer;

?>