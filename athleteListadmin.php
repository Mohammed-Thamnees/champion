<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KSAA</title>
</head>
<?php
  include("admin_header.php");
?>

<body style="font-size: 18px;"><center><h1>Athlete List</h1>
  <br><br>

<form id="form1" name="form1" method="post" action="">
  <table width="700" border="0" cellspacing="0" cellpadding="10">
  <table width="400" border="0" cellspacing="0" cellpadding="10">
    <tr>
    <th scope="col"><h4>Select College</h4></th>
     <td align="center"> <label for="select6"></label>
      <?php
      $buffer = "<select name='select6' id='select6' size='1px' required>
        <option></option>";
      
        include("connection.php");
        $rep="select * from college_registration,login WHERE college_registration.lid=login.id and login.type='user'";
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
    </td>
</tr>
<tr>
    <td colspan="2" align="center">
      <div class="form-group form-button">
      <input type="submit" name="submit" value="Submit" class="form-submit">
    </div>
    </td>
  </tr>
</table>
<br><br>
  <table width="700" border="1" cellspacing="0" cellpadding="10">
  <tr>
    <th scope="col">Sl.</th>
    <th scope="col">NAME</th>
    <th scope="col">REG.NUMBER</th>
    <th scope="col">COLLEGE</th>
  </tr>
  
<?php

if(isset($_POST['submit']))
{
  
  $clg=$_POST["select6"];


include("connection.php");

$rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.name,athlete_registration.regno,college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.approve='approved' and college_registration.clg_id=$clg");


$i=1;
if (mysqli_num_rows($rs)>0){

while($row1=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row1[1]?></td>
    <td><?php echo $row1[2]?></td>
    <td><?php echo $row1[3]?></td>
  </tr>
  <?php $i++; }}}?>

</table>
</table>
</form>
</center>
</body>
<?php
include("admin_footer.php");
?>
</html>