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
if(isset($_POST['btnsubmit']))
{
  $name=$_POST['txtname'];
  $dob=$_POST['dob'];
  $gender=$_POST['radio'];
  $email=$_POST['txtemail'];
  $cell=$_POST['number'];
  $father=$_POST['txtfather'];
  $mother=$_POST['txtmother'];
  $district=$_POST['slcdistrict'];
  $add=$_POST['txtadd'];
  $pin=$_POST['txtpin'];
  $coach=$_POST['txtcoach'];
  $blood=$_POST['slcblood'];
  $id=$_FILES['imageid']['name'];
  move_uploaded_file($_FILES['imageid']['tmp_name'],"id/".$id);
  
  
  $photo=$_FILES['uplimage']['name'];
  move_uploaded_file($_FILES['uplimage']['tmp_name'],"upload/".$photo);
  
  mysqli_query($con,"insert into athlete_registration values(null,'$name','$dob','$gender','$email','$cell','$father','$mother','$district','$add','$pin','$coach','$blood','$id','$photo',0,'$clg_id','pending')") or die(mysqli_errno($con));
  ?>
    <script>
     alert("Registration submitted...");
   window.location="athleteRegister.php";
    </script>
    <?php
  
}
?>

<body style="font-size: 18px;">
  <center><h1>Athlete Registeration</h1></center>
  <br><br>
  <center>
<form action="" method="POST" enctype="multipart/form-data">
<table width="800" cellspacing="0" cellpadding="10">
  <tr>
    <th scope="row">Name</th>
    <td><label for="txtname"></label>
      <input type="text" name="txtname" id="txtname" size="20" required /></td>
  </tr>
  <tr>
    <th scope="row">DOB</th>
    <td><label for="dob"></label>
    <input type="date" name="dob" id="dob" required/>
    </td>
  </tr>
  <tr>
    <th scope="row">Gender</th>
    <td>
      <label for="radio">
        <input type="radio" name="radio" id="radio" value="male" size="10" />Male 
      </label>
      <label for="radio2">
        <input type="radio" name="radio" id="radio2" value="female" size="10" />Female
      </label>
    </td>
  </tr>
  <tr>
    <th scope="row">Email</th>
    <td><label for="txtemail"></label>
      <input type="text" name="txtemail" id="txtemail" size="20" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/></td>
  </tr>
  <tr>
    <th scope="row">Cell number</th>
    <td><label for="number"></label>
      <input type="number" name="number" id="number" size="20" required pattern="[789][0-9]{9}"/></td>
  </tr>
  <tr>
    <th scope="row">Fathers Name</th>
    <td><label for="txtfather"></label>
      <input type="text" name="txtfather" id="txtfather" size="20" required/></td>
  </tr>
  <tr>
    <th scope="row">Mothers Name</th>
    <td><label for="txtmother"></label>
      <input type="text" name="txtmother" id="txtmother" size="20" required/></td>
  </tr>
  <tr>
    <th scope="row">District</th>
    <td><label for="slcdistrict"></label>
      <select name="slcdistrict" id="slcdistrict" size="1" required>
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
    <th scope="row">Address</th>
    <td><label for="txtadd"></label>
      <textarea name="txtadd" id="txtadd" cols="45" rows="5" required></textarea></td>
  </tr>
  <tr>
    <th scope="row">Pin</th>
    <td><label for="txtpin"></label>
      <input type="text" name="txtpin" id="txtpin" size="20" required pattern="[0-9]{6}"/></td>
  </tr>
  <tr>
    <th scope="row">Coache Name</th>
    <td><label for="txtcoach"></label>
      <input type="text" name="txtcoach" id="txtcoach" size="20" required/></td>
  </tr>
  <tr>
    <th scope="row">Blood group</th>
    <td><label for="slcblood"></label>
      <select name="slcblood" id="slcblood" size="1" required>
        <option>Select</option>
        <option>A+ve</option>
        <option>B+ve</option>
        <option>AB+ve</option>
        <option>O+ve</option>
        <option>A-ve</option>
        <option>B-ve</option>
        <option>AB-ve</option>
        <option>O-ve</option>
      </select></td>
  </tr>
  <tr>
    <th scope="row">Id proof/Aadhar number</th>
    <td><label for="imageid"></label>
      <input type="file" name="imageid" id="imageid" size="20" required/></td>
  </tr>
  <tr>
    <th scope="row">Upload photo</th>
    <td><label for="uplimage"></label>
      <input type="file" name="uplimage" id="uplimage" size="20" required/></td>
  </tr>
  <tr>
    <th scope="row" colspan="2" align="center">
      <div class="form-group form-button">
        <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" size="10" class="form-submit"/></div></th>
    </tr>
</table>
</form></center>
</body>
<?php include("clg_footer.php")?>
</html>