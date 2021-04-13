<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("admin_header.php")?>
<body style="font-size: 18px;">
  <center>
    <h1>Registered Athletes</h1>
    <br><br>
<form action="" method="POST">
<table width="600" border="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>Sl</th>
    <th>Athlet Name</th>
    <th>College</th>
    <th>&nbsp;</th>
  </tr>
<?php
include("connection.php");
$rs=mysqli_query($con,"select athlete_registration.*,college_registration.clg_name from athlete_registration,college_registration where athlete_registration.clgid=college_registration.lid and athlete_registration.approve='pending'");
$i=1;
while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
    <td><a href="athleteApprove.php?id=<?php echo $row['ath_id']?>">Verify</a></td>
  </tr>
  <?php $i++; }?>
</table>
</form>
</center>
</body>
<?php include("admin_footer.php")?>
</html>