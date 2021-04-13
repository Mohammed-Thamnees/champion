<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KSAA</title>
</head>
<?php
include("clg_header.php");
include("connection.php");
?>

<body><center><h2>Reply to your Complaints</h2>
<br><br>
  <form action="" method="post">
    <table width="800" border="1" cellspacing="0" cellpadding="10">
  <tr>
    <th scope="col"><font size="4">Sl no</font></th>
    <th scope="col" ><font size="4">REPLY DATE</font></th>
    <th scope="col"><font size="4">COMPLAINTS</font></th>
    <th scope="col"><font size="4">REPLY</font></th>
  </tr>
  <tr>
  <?php
    $clg_id=$_SESSION['lid'];
    $rs=mysqli_query($con,"select * from complaint where clg_id=$clg_id");
	$i=1;
	if(mysqli_num_rows($rs)>0)
		{
			while($row=mysqli_fetch_array($rs))
			{
	
	?>
     <tr>
      <td scope="col"><font size="3"><?php echo $i?></font></td>
      <td scope="col"><font size="3"><?php echo $row['rep_date']?></font></td>
      <td scope="col"><font size="3"><?php echo $row['cmplaint']?></font></td>
      <td scope="col"><font size="3"><?php echo $row['reply']?></font></td>
  </tr>
  <?php  $i++; }}?>
</table>
</form>
</center>
</body>
<?php include("clg_footer.php")?>
</html>