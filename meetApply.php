<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("clg_header.php")?>

<body style="font-size: 18px;">
<center>
    <h1>Approved Athletes of the College</h1>
    <br><br>
<form action="" method="post">
<table width="800" border="1" cellspacing="0" cellpadding="10">
  <tr>
    <th scope="col">SI</th>
    <th scope="col">Reg.No</th>
    <th scope="col">Name</th>
    <th scope="col">DOB</th>
    <th scope="col">Gender</th>
  </tr>
<?php 
include("connection.php");
$clg_id=$_SESSION['lid'];
$rs=mysqli_query($con,"select athlete_registration.* from athlete_registration where clgid='$clg_id' and approve='approved';");
$i=1;
while($row=mysqli_fetch_array($rs))
{
	
?>
  <tr>
    <td scope="col"><?php echo $i?></td>
    <td scope="col"><?php echo $row[15]?></td>
    <td scope="col"><?php echo $row[1]?></td>
    <td scope="col"><?php echo $row[2]?></td>
    <td scope="col"><?php echo $row[3]?></td>
    <td scope="col"><a href="eventApply.php?gender=<?php echo $row[3]?>&ath_id=<?php echo $row[0]?>">apply</a></td>
    </tr>
    <?php
 $i++; 
}
 ?>
</table>
</form>
</center>
</body>
<?php include("clg_footer.php")?>
</html>