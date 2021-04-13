<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<script>
function validate()
{
  var pass=document.getElementById("txtpass").value;
  var cpass=document.getElementById("confpass").value;
  if(pass!=cpass){ 
  alert("password mismatched");
  }
}
</script>
<?php
include("log_header.php");
include("connection.php");
if(isset($_POST['submit'])){
  
  
  
  $name=$_POST['txtname'];
  $affliation=$_POST['affno'];
  $add=$_POST['txtadd'];
  $district=$_POST['slcdistrict'];
  $pin=$_POST['txtpin'];
  $email=$_POST['txtemail'];
  $contact=$_POST['number'];
  $password1=$_POST['txtpass'];
  $password2=$_POST['confpass'];
  if($password1==$password2)
  {
    mysqli_query($con,"insert into login values(null,'$email','$password2','pending')");
    $id=mysqli_insert_id($con);
    mysqli_query($con,"insert into college_registration values(null,'$name','$affliation','$add','$district','$pin','$email','$contact','$password2','$id')");
    
    
  }
  else
  {
  ?>
    <script>
  alert("password mismatched...")
    </script>
<?php
}
  ?>
   <script>
   alert("Registration submitted...");
   window.location="login.php";
   </script>
   <?php
}
?>

<body style="font-size: 18px;">
	 <center><h2>College Registration</h2></center>
	 <center>
<form action="" method="POST" enctype="multipart/form-data">
<table width="700" cellspacing="0" cellpadding="10">
	<tr>
    <th scope="row">Name</th>
    <td><label for="txtname"></label>
      <input type="text" name="txtname" id="txtname" required /></td>
  </tr>
  <tr>
  	<th scope="row">Affiliation Number</th>
  	<td><label for="affno"></label>
  		<input type="Number" name="affno" id="affno" required/></td>
  	</tr> 
  	<tr>
  		<th scope="row">Address</th>
  		<td><label for="txtadd"></label>
      <textarea name="txtadd" id="txtadd" cols="45" rows="5" required></textarea></td>
  	</tr>
  	<tr>
    <th scope="row">District</th>
    <td><label for="slcdistrict"></label>
      <select name="slcdistrict" id="slcdistrict" required>
        <option>select</option>
        <option>Thiruvananthapuram</option>
        <option>Kollam</option>
        <option>Pathanamthitta</option>
        <option>Alappuzha</option>
        <option>Kottayam</option>
        <option>Idukki</option>
        <option>Ernakulam</option>
        <option>Thrissur</option>
        <option>Palakkad</option>
        <option>Malappuram</option>
        <option>Kozhikode</option>
        <option>Wayanad</option>
        <option>Kannur</option>
        <option>Kasaragod</option>
        
      </select></td>
  </tr>
  <tr>
    <th scope="row">Pin</th>
    <td><label for="txtperpin"></label>
      <input type="text" name="txtpin" id="txtpin" required pattern="[0-9]{6}"/></td>
  </tr>
  <tr>
    <th scope="row">Email</th>
    <td><label for="txtemail"></label>
      <input type="text" name="txtemail" id="txtemail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/></td>
  </tr>
  <tr>
    <th scope="row">Phone number</th>
    <td><label for="textfield"></label>
      <input type="number" name="number" id="number" required pattern="[789][0-9]{9}"/></td>
  </tr>
  <tr>
  	<th scope="row">Password</th>
  	<td><label for="txtpass"></label>
  		<input type="Password" name="txtpass" id="txtpass" required></td>
  </tr>
  <tr>
  	<th scope="row">Confirm Password</th>
  	<td><label for="confpass"></label>
  		<input type="Password" name="confpass" id="confpass" required></td>
  </tr>
  <tr>
  	<th colspan="2" scope="row">
      <div class="form-group form-button">
        <input type="submit" name="submit" id="submit" value="Submit" class="form-submit"/></th>
      </div>
  </tr>
</table>
</form>
</center>
</body>
<?php include("footer.php")?>
</html>