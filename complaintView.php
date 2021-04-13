<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KSAA</title>
</head>
<?php
include("admin_header.php");
include("connection.php");
?>

<body style="font-size: 18px;"><center><h2>Reply to complaints</h2>
  <br><br>
  <form action="" method="post">
    <table width="800" border="1" cellspacing="0" cellpadding="10">
  <tr>
    <th scope="col">Sl</th>
    <th scope="col">Complaint Date</th>
    <th scope="col">Institution Name</th>
    <th scope="col">Institution Address</th>
    <th scope="col">Institution Contact</th>
    <th scope="col">Complaint</th>
    <th scope="col">Reply</th>
  </tr>
  <tr>
  <?php
    $rs=mysqli_query($con,"select complaint.*,college_registration.* from complaint,college_registration where complaint.clg_id=college_registration.lid order by cmp_date desc");
	$i=1;
	if(mysqli_num_rows($rs)>0)
		{
			while($row=mysqli_fetch_array($rs))
			{
	
	?>
     <tr>
     <td scope="col"><?php echo $i?></td>
    <td scope="col"><?php echo $row[4]?></td>
    <td scope="col"><?php echo $row['clg_name']?></td>
    <td scope="col"><?php echo $row['address']?></td>
    <td scope="col"><?php echo $row['email']?><br><?php echo $row['phone']?></td>
     <td scope="col"><?php echo $row['cmplaint']?></td>
     <?php
	 if(is_null($row['reply']))
	 {
		 ?>
         <td><a href="complaintReply.php?id=<?php echo $row['cmp_id'] ?>">Reply</a></td>
         <?php
	 }
	 else
	 {
		 
		 ?>
         <td scope="col"><?php echo $row['reply']?></td>
         <?php
	 }
	 ?>
    
  </tr>
  <?php  $i++; }}?>
</table>
</form>
</center>
</body>
<?php include("admin_footer.php")?>
</html>