<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KSAA</title>
</head>

<?php
include("admin_header.php");
include("connection.php");
if(isset($_POST['submit']))
{
	$name=$_POST['textfield'];
	$venue=$_POST['textfield2'];
	$place=$_POST['textfield3'];
	$startdate=$_POST['startDate'];
	$enddate=$_POST['endDate'];
	$applybefore=$_POST['applyBefore'];
	
		mysqli_query($con,"insert into meet_register values(null,'$name','$venue','$place','$startdate','$enddate','$applybefore')") or die(mysqli_errno($con));
	?>
    <script>
     alert("meet registered...");
	 window.location="adminHome.php";
    </script>
    <?php
	
}
?>

<body style="font-size: 18px;">
	<center>
		<h1>Meet Register</h1>
		<br><br>	
		<form action="" method="POST" enctype="multipart/form-data">
			<table border="0" width="400" cellspacing="0" cellpadding="10">
				<tr>
					<td>Meet Name</td>
					<td><input type="text" name="textfield" id="textfield" placeholder="Name of meet" required></td>
				</tr>
				<tr>
					<td>Venue</td>
					<td><input type="text" name="textfield2" id="textfield2" placeholder="Venue of meet" required></td>
				</tr>
				<tr>
					<td>Place</td>
					<td><input type="text" name="textfield3" id="textfield3" placeholder="Place of meet" required></td>
				</tr>
				<tr>
					<td>Meet Start Date</td>
					<td><input type="Date" name="startDate" id="startDate" placeholder="Meet start date" required></td>
				</tr> 
				<tr>
					<td>Meet End Date</td>
					<td><input type="Date" name="endDate" id="endDate" placeholder="Meet end date" required></td>
				</tr>
				<tr>
					<td>Apply Before</td>
					<td><input type="Date" name="applyBefore" id="applyBefore" placeholder="Apply before date" required></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<div class="form-group form-button">
							<input type="submit" name="submit" value="Submit" id="submit" class="form-submit">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="button" name="cancel" id="cancel" value="Cancel" class="form-submit"></div></td>
				</tr>
			</table>
		</form>
	</center>
</body>
<?php include("admin_footer.php")?>
</html>