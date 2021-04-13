<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KSAA</title>
</head>

<?php
include("admin_header.php");
include("connection.php");

$athlet_id=$_GET['id'];
$rs=mysqli_query($con,"select athlete_registration.*,college_registration.clg_name from athlete_registration,college_registration where athlete_registration.clgid=college_registration.lid and ath_id='$athlet_id'");
if($row=mysqli_fetch_array($rs))
{
?>
<body style="font-size: 18px;">
  <center>
    <h1>Athlete Approval Process</h1>
    <br><br>
<form action="" method="POST" >
<table width="700"  cellspacing="0" cellpadding="10">
<tr >
   <td colspan="2" align="center"><a href="upload/<?php echo $row['photo'] ?>" target="_blank"><img src="upload/<?php echo $row['photo'] ?>" height="100" width="100" /></td>
  </tr>
  <tr>
    <th scope="row">Athelete Name</th>
    <td>
      <?php echo $row[1] ?></td>
  </tr>
  <tr>
    <th scope="row">DOB</th>
    <td>
    <?php echo $row[2] ?>
    </td>
  </tr>
  <tr>
    <th scope="row">Gender</th>
    <td><?php echo $row[3] ?>
</td>
  </tr>
  <tr>
    <th scope="row">Email</th>
    <td><?php echo $row[4] ?></td>
  </tr>
  <tr>
    <th scope="row">Cell number</th>
    <td><?php echo $row[5] ?></td>
  </tr>
  <tr>
    <th scope="row">Fathers Name</th>
    <td><?php echo $row[6] ?></td>
  </tr>
  <tr>
    <th scope="row">Mothers Name</th>
    <td><?php echo $row[7] ?></td>
  </tr>
  <tr>
    <th scope="row">District</th>
    <td><?php echo $row[8] ?></td>
  </tr>
  <tr>
    <th scope="row">Address</th>
    <td><?php echo $row[9] ?></td>
  </tr>
  <tr>
    <th scope="row">pin</th>
    <td><?php echo $row[10] ?></td>
  </tr>
  <tr>
    <th scope="row">Coache's name</th>
    <td><?php echo $row[11] ?></td>
  </tr>
  <tr>
    <th scope="row">Blood group</th>
    <td> <?php echo $row[12] ?></td>
  </tr>
  <tr>
    <th scope="row">Id proof/Aadhar</th>
    <td><a href="id/<?php echo $row['aadhar'] ?>" target="_blank"><img src="id/<?php echo $row['aadhar'] ?>" height="100" width="100" /></a></td>
  </tr>
  
  <?php }?>
  <tr>
    <th scope="row">
      <div class="form-group form-button">
        <input type="submit" name="btnsubmit" id="btnsubmit" value="Approve" class="form-submit"/></th></div>
    <th scope="row">
      <div class="form-group form-button">
        <input type="submit" name="btnreject" id="btnreject" value="Reject" class="form-submit"/></th></div>
    </tr>
</table>
</form>
</center>
</body>
<?php include("admin_footer.php")?>
</html>
<?php
if(isset($_POST['btnsubmit'])){
  $n=randomnum();
  $str="update athlete_registration set Approve='approved',regno='$n' where ath_id='$athlet_id'";
  mysqli_query($con,$str);
    ?>
     <script>
       alert("verified...");
     window.location="athleteView.php";
     
        </script>
    <?php
}

if(isset($_POST['btnreject'])){
  $str="update athlete_registration set Approve='rejected' where ath_id='$athlet_id'";
  mysqli_query($con,$str);
    ?>
     <script>
       alert("rejected...");
     window.location="athleteView.php";
     
        </script>
    <?php
}
  
function randomnum()
{
  $num;
  try
  {
      global $con;
        $r2=mysqli_query($con,"select max(regno) from athlete_registration");
      $row1=mysqli_fetch_array($r2);
      $num=$row1[0];
      if($num==0)
      {
      $num=1000000000;  
      }
      else
      {
      $num+=1;
      echo $num;
      }
    
  }
  catch(Exception $e)
  {
     $num=1000000000;
  }
  return($num);
}
?>