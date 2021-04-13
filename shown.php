<?php
include("connection.php");
  $evt=$_GET['event'];

  $buffer="<select name='select2' id='select2'><option value='0'>SELECT</option>";
$r=mysqli_query($con,"select athlete_registration.regno from athlete_registration,events,event_select where event_select.ath_id=athlete_registration.ath_id and event_select.evt_id=events.evt_id and events.evt_id=$evt");

if (mysqli_num_rows($r)>0)
{
while($row=mysqli_fetch_array($r)){
    $buffer = $buffer."<option value='".$row[0]."'>".$row[0]."</option>";
}
}
$buffer = $buffer."</select>";
echo $buffer;
?>