<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include("admin_header.php");
?>
<body style="font-size: 18px;">
  <center>
    <h1>Registered Colleges</h1>
    <br><br>
<table width="600" border="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>Sl</th>
    <th>College</th> 
    <td>&nbsp;</td>
  </tr>
  <?php
include("connection.php");
$rs=mysqli_query($con,"select * from college_registration,login where college_registration.lid=login.id and login.type='pending'");
$i=1;
while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
    <td><?php echo $row[1]?></td> 
    <td><a href="collegeApprove.php?id=<?php echo $row['lid']?>">Verify</a></td>
  </tr>
  <?php $i++; }?>
</table>
</center>
</body>
<?php
include("admin_footer.php");
?>
</html>