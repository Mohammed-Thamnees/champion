<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include("clg_header.php");
include("connection.php");
$clg_id=$_SESSION['lid'];
?>
<body style="font-size: 18px;">
  <center>
    <h1>Current Status of Registered Athletes</h1>
    <br>
<table width="700" border="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>Sl</th>
    <th>Name</th>
    <th>Reg.Number</th>
    <th>Status</th>
    
  </tr>
 <?php
$rs=mysqli_query($con,"select athlete_registration.* from athlete_registration where clgid='$clg_id'");
$i=1;
while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['regno']?></td>
    <td><?php echo $row['approve']?></td>
    
  </tr>
  <?php $i++; }?>
</table>
</center>
</body>
<?php include("clg_footer.php")?>
</html>