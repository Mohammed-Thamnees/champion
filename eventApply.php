<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KSAA</title>
</head>
<?php
	include("clg_header.php");
?>
<body style="font-size: 18px;"><center>
	<h2>Event Selection</h2></br>
	<form action="" method="POST" >
	<table width="300" border="0" cellpadding="10" cellspacing="0">
	<tr>
	<th colspan="3"><h4>Individual Events</h4></th></tr>
	<tr>
		<td><select name="event1" id="event1">
			<option>--select--</option>
			<?php
			include("connection.php");
$gender=$_GET['gender'];
$rs=mysqli_query($con,"SELECT * FROM events WHERE gender='$gender' and evt_id!=18 and evt_id!=19 and evt_id!=37 and evt_id!=38");
	  if(mysqli_num_rows($rs)>0)
		{
			while($row1=mysqli_fetch_array($rs))
			{
	
	?>
	  
      <option value="<?php echo $row1[0]?>"><?php echo $row1[1]?></option>
      
      
      <?php
			}}
	  ?>
      
		</select> </td>
		<td>
		<select name="event2" id="event2">
			<option>--select--</option>
			<?php
			include("connection.php");
$gender=$_GET['gender'];
$rs=mysqli_query($con,"SELECT * FROM events WHERE gender='$gender' and evt_id!=18 and evt_id!=19 and evt_id!=37 and evt_id!=38");
	  if(mysqli_num_rows($rs)>0)
		{
			while($row2=mysqli_fetch_array($rs))
			{
	
	?>
	  
      <option value="<?php echo $row2[0]?>"><?php echo $row2[1]?></option>
      
      
      <?php
			}}
	  ?>
      
		</select> </td>
		<td><select name="event3" id="event3">
			<option>--select--</option>
			<?php
			include("connection.php");
$gender=$_GET['gender'];
$rs=mysqli_query($con,"SELECT * FROM events WHERE gender='$gender' and evt_id!=18 and evt_id!=19 and evt_id!=37 and evt_id!=38");
	  if(mysqli_num_rows($rs)>0)
		{
			while($row3=mysqli_fetch_array($rs))
			{
	
	?>
	  
      <option value="<?php echo $row3[0]?>"><?php echo $row3[1]?></option>
      
      
      <?php
			}}
	  ?>
      
		</select></td></tr> 
		<tr>
			<th colspan="3">
		<h4>Group  Event</h4></th></tr>
		<tr><th colspan="3">
		<select name="grpevent" id="grpevent">
			<option>--select--</option>
			<?php
			include("connection.php");
$gender=$_GET['gender'];
if ($gender==male) {

$rs=mysqli_query($con,"SELECT * FROM events WHERE evt_id=18 or evt_id=19");
	  if(mysqli_num_rows($rs)>0)
		{
			while($row4=mysqli_fetch_array($rs))
			{
	
	?>
	  
      <option value="<?php echo $row4[0]?>"><?php echo $row4[1]?></option>
      
      
      <?php
			}}}

	  if ($gender==female) {

$rs=mysqli_query($con,"SELECT * FROM events WHERE evt_id=37 or evt_id=38");
	  if(mysqli_num_rows($rs)>0)
		{
			while($row4=mysqli_fetch_array($rs))
			{
	
	?>
	  
      <option value="<?php echo $row4[0]?>"><?php echo $row4[1]?></option>
      
      
      <?php
			}}}
	  ?>
      
		</select> </th>
	</tr>
	<tr>
		<th colspan="3">
			<div class="form-group form-button">
				<input type="submit" name="submit" value="Submit" class="form-submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="button" name="cancel" value="Cancel" class="form-submit"></div></th></tr>
	</table>
	</form>
</center>
</body>
</html>
<?php
	include("clg_footer.php");
?>	

<?php
if(isset($_POST['submit']))
{
	session_start();
	$meet_id=$_SESSION["meet_id"];

	$ath_id=$_GET['ath_id'];
	
	$res1=$_POST['event1'];
	$res2=$_POST['event2'];
	$res3=$_POST['event3'];
	$res4=$_POST['grpevent'];

		mysqli_query($con,"insert into event_select values(null,'$res1','$ath_id','$meet_id'),(null,'$res2','$ath_id','$meet_id'),(null,'$res3','$ath_id','$meet_id'),(null,'$res4','$ath_id','$meet_id')");
	?>
    <script>
	alert("Athlete applied....");
	window.location="meetApply.php";
	</script>
	<?php
			}		
		
		
	?>		