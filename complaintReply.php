<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KSAA</title>
</head>
<?php
include("admin_header.php");
include("connection.php");
$complaint_id=$_GET['id'];

if(isset($_POST['btnsbt']))
{
  if (empty($_POST["txtrpl"])) 
  {
  ?>
  <script>
     alert("Cannot submit form. Give some reply..");
   window.location="complaintView.php";
    </script>

<?php
}
else
{
  $rep_text=$_POST['txtrpl'];
    mysqli_query($con,"update complaint set reply='$rep_text',rep_date=curdate() where cmp_id='$complaint_id'");
}

?>
<script>
     alert("reply registered successfullyyy...");
   window.location="complaintView.php";
    </script>
    <?php
  }
    ?>
<body><center>
<h1>Give Reply</h1>
  <form action="" method="post" enctype="multipart/form-data">
  <table width="400" border="0" cellspacing="0" cellpadding="10">
   
  <tr>
      <th scope="row">Type Your Reply</th>
      <td><label for="txtrpl"></label>
          <textarea name="txtrpl" id="txtrpl" style="width: 500px; height: 300px;" placeholder="Type ypur reply here............"></textarea>        <label for="flcmpt"></label></td>
    </tr>
    <tr>
      <div class="form-group form-button">
      <th colspan="2" scope="row"><input type="submit" name="btnsbt" id="btnsbt" value="Submit" class="form-submit" /></th></div>
    </tr>
  </table>
</form>
</center>
</body>
<?php include("admin_footer.php")?>
</html>