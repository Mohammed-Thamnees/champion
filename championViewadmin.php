 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("admin_header.php")?>

<body style="font-size: 18px;">
  <center>
<form id="form1" name="form1" method="post" action="">
  <table width="500" border="0" cellspacing="0" cellpadding="10">
    <tr>
    <th scope="col">Select Meet</th>
    <td align="center">
      <label for="select6"></label>
      <?php
      $buffer = "<select name='select6' id='select6' required>
        <option></option>";
      
        include("connection.php");
        $rep="select * from meet_register";
      $r1=mysqli_query($con,$rep);
      if (mysqli_num_rows($r1)>0)
{
      while($row=mysqli_fetch_array($r1)){
      $buffer = $buffer."<option value='".$row[0]."'>".$row[1]."</option>";
    }
}
$buffer = $buffer."</select>";
echo $buffer;
     ?>
      </select>
    </td>
  </tr>
  <tr>
  	<td colspan="2" align="center">
  <input type="submit" name="button" id="button" value="Champion" class="form-submit"/>
  	</td>
  </tr>
</table>
</form>
</center>

<?php
include("connection.php");
if (isset($_POST['button'])) {

$meet_id=$_POST["select6"];
$sql=mysqli_query($con,"SELECT DISTINCT champion.regno,max(champion.total_point),athlete_registration.name,college_registration.clg_name from champion,athlete_registration,college_registration WHERE champion.regno=athlete_registration.regno and athlete_registration.clgid=college_registration.lid and champion.meet_id='$meet_id'");

if (mysqli_num_rows($sql)>0){
	while ($row1=mysqli_fetch_array($sql)){



?>
<h1 align="center">The champion is <?php echo $row1['2']; ?> from <?php echo $row1['3']; ?> with a Total point of <?php echo $row1['1']; ?></h1>
<?php
}
}
}
?>
</body>
<?php include("admin_footer.php")?>
</html>