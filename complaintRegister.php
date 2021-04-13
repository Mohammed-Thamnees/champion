<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<?php
include("clg_header.php");
include("connection.php");
$clg_id=$_SESSION['lid'];
if(isset($_POST['btnsbt']))
  if (empty($_POST["txtcplt"])) 
  {
  ?>
  <script>
     alert("Cannot submit form. Write any complaint if you have..");
   window.location="complaintRegister.php";
    </script>

<?php
}
else
{
 $compl=$_POST['txtcplt'];

  
  mysqli_query($con,"insert into complaint values(null,'$clg_id','$compl',null,curdate(),null)") or die(mysqli_errno($con));

  ?>
  <script>
     alert("Complaint Registered...");
   window.location="clgHome.php";
    </script>
    <?php
  
}
?>
  
<body style="font-size: 18px;"><form action="" method="post" enctype="multipart/form-data">
  <center><h2>Complaint Register</h2>
  <table width="400" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <th scope="row">Type Your Complaint</th>
      <td><label for="txtcplt"></label>
        
          <textarea name="txtcplt" id="txtcplt" style="width: 500px; height: 300px;" placeholder="Type your complaint here........"></textarea>        <label for="flcmpt"></label></td>
    </tr>
    <tr>
      <th colspan="2" scope="row">
        <div class="form-group form-button">
        <input type="submit" name="btnsbt" id="btnsbt" value="Submit" class="form-submit"/>
        </div>
      </th>
    </tr>
  </table></center>
</form>
</body>
<?php
include("clg_footer.php");
?>
</html>
