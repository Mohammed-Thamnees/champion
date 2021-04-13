<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Untitled Document</title>
</head>
<?php
include("log_header.php");
include("connection.php");
if(isset($_POST['btnlogin']))
{
	$uname=$_POST['txtname'];
	$pass=$_POST['txtpassword'];
	session_start();
	
	$res=mysqli_query($con,"select *from login where username='$uname' and password='$pass'");
	if(mysqli_num_rows($res)>0){
		
		$row=mysqli_fetch_array($res);
		$type=$row[3];
		$_SESSION['lid']=$row[0];
		if($type=='admin'){
			header("location:adminHome.php");
			
		}
		else if($type=='user'){
			header("location:clgHome.php");
		}
		else{
			?>
			<script> 
			alert("not valid ");
            </script>
			<?php
		}
	}
	else
	{
	?>
    <script>alert("invalid username or password")</script>
    
    
	<?php
    
	}}
	

?>
	
<body style="font-size: 18px;">
	<center>
<section class="sign-in">
<div class="signin-content">
<div class="signin-form">
<h1>Login Here</h1>
<br><br>
<form id="form1" name="form1" method="post" action="" class="register-form">

      <table width="500" border="0" cellpadding="10" cellspacing="0">
        <tr>
          <th scope="row">Email/Username</th>
          <td> <div class="form-group"><label for="txtname"></label>
            <input type="text" name="txtname" id="txtname" required="required" title="Username is registered college email id" /></div>
            </td>
          </tr>
        <tr>
          <th scope="row">Password</th>
          <td> <div class="form-group"><label for="txtpassword"></label>
            <input type="password" name="txtpassword" id="txtpassword" required="required" /> </div></td>
          </tr>
        <tr>
          <td colspan="2" scope="row">Not registered... <a href="collegeRegister.php">Register Now</a></td>
          </tr>
        <tr>
          <th colspan="2" scope="row"> <div class="form-group form-button"><input type="submit" name="btnlogin" id="btnlogin" value="LOGIN" class="form-submit"/></div></th>
          </tr>
      </table>
    </div>
  </form>
</div>
</div>
</section>
</center>
</body>
<?php include("footer.php")?>
</html>