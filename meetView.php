<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include("clg_header.php");
include("connection.php");

$rs=mysqli_query($con,"select meet_register.* from meet_register where apply_before >= curdate()");
	if(mysqli_num_rows($rs)>0)
		{
			while($row=mysqli_fetch_array($rs))
			{
				$_SESSION["meet_id"]=$row[0];
?>

<body style="font-size: 18px;">
  <center>
  <h1>MEET VIEW</h1>
  <br>
<form action="" method="post">
<table width="800" border="0" cellspacing="0" cellpadding="20">
  <tr>
    <th>Meet Name  :  </th>
    <td scope="col"><?php echo $row[1]?></td>
  </tr>
  <tr>
    <th scope="col">Place  :  </th>
    <td scope="col"><?php echo $row[3]?></td>
  </tr>
  <tr>
    <th scope="col">Venue  :  </th>
    <td scope="col"><?php echo $row[2]?></td>
  </tr>
  <tr>
    <th scope="col">Meet Start Date  :  </th>
    <td scope="col"><?php echo $row[4]?></td>
  </tr>
  <tr>
    <th scope="col">Meet End Date  :  </th>
    <td scope="col"><?php echo $row[5]?></td>
  </tr>
  <tr>
     <td colspan="2" align="center">
      <div class="form-group form-button">
        <a href="meetApply.php?date=<?php echo $row[6]?>" class="form-submit">apply</a></div></td>
  </tr>

 <?php
			}
		}
 ?>
</table>
</form>
</center>
</body>
<?php include("clg_footer.php")?>
</html>
