  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("admin_header.php")?>
<body style="font-size: 18px;">
  <center>
    <h1>View Result of Meet</h1>
    <br>
<form id="form1" name="form1" method="post" action="">
  <table width="500" border="0" cellspacing="0" cellpadding="10">
    <tr>
    <th scope="col">Select Meet</th>
    <td align="center">
      <label for="select6"></label>
      <?php
      $buffer = "<select name='select6' id='select6' size='1px' required>
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
      <th scope="col">Select Gender</th>
      <th scope="col"><label for="select2"></label>
        <select name="select2" id="select2" onchange="show(this.value)" size="1" required>
        
        <option></option>
      <option>male</option>
      <option>female</option>
      </select>        <label for="select"></label></th>
    </tr>
    <tr>
      <th scope="col">Select Event</th>
      
      
      <th scope="col"><select name="select" id="select" size="1" required>

      
      </select></th>
    </tr>
  </table>
  <div class="form-group form-button">
  <input type="submit" name="button" id="button" value="Result" class="form-submit"/>
</div>

<?php
if(isset($_POST['button']))
{
	
	$ev=$_POST["select"];
  $meet=$_POST["select6"];
	
	?>


  <p>&nbsp;</p>
  <table width="" border="0" cellspacing="0" cellpadding="30">
    <tr>
      <td>
  <table width="400" border="1" cellspacing="0" cellpadding="10">
  <?php
  include("connection.php");
  $point=0;
  $p=0;
  $r=0;
  $rs=mysqli_query($con,"select athlete_registration.name,college_registration.clg_name,athlete_registration.regno from result,athlete_registration,college_registration where meet_id='$meet' and evt_id='$ev' and athlete_registration.regno=result.first and college_registration.lid=athlete_registration.clgid");
  if(mysqli_num_rows($rs)>0)
		{
			while($row=mysqli_fetch_array($rs))
			{
				$id=$row[2];
				
	
	$r1=mysqli_query($con,"select result.* from result,athlete_registration where  athlete_registration.regno=result.first and( result.first='$id' or result.second='$id' or result.third='$id') and result.meet_id='$meet' and result.evt_id!='$ev'");

 if(mysqli_num_rows($r1)>0)
		{
			while($row1=mysqli_fetch_array($r1))
			{
			if($row1[2]==$id)
			{
			$point=10;
			}
			if($row1[3]==$id)
			{
				
				$p=5;
			}
				if($row1[4]==$id)
				{
					
					$r=3;
				}
			}}
	?>
  
 

    <tr>
      <th colspan="2" scope="col">FIRST</th>
    </tr>
    <tr>
      <td>Rank</td>
      <td>I</td>
    </tr>
    <tr>
      <td>Name of Athlete</td>
      <td> <?php echo $row[0]?></td>
    </tr>
    <tr>
      <td>Institution</td>
      <td> <?php echo $row[1]?></td>
    </tr>
    <tr>
      <td>Point</td>
      <td>10</td>
    </tr>
    <tr>
      <td>Total Point</td>
      <td><?php 
      $a1=$point+$p+$r+10;
      echo $a1 ?></td>
    </tr>
    <?php  
      
            mysqli_query($con,"insert into champion values(null,'$id','$a1','$meet')");
   
  }}?>
  </table>
</td>

<br><br><br>

<td>
    <table width="400" border="1" cellspacing="0" cellpadding="10">
  <?php
  $point1=0;
  $p1=0;
  $r2=0;
  $rs=mysqli_query($con,"select athlete_registration.name,college_registration.clg_name,athlete_registration.regno from result,athlete_registration,college_registration where meet_id='$meet' and evt_id='$ev' and athlete_registration.regno=result.second and college_registration.lid=athlete_registration.clgid");
  if(mysqli_num_rows($rs)>0)
		{
			while($row=mysqli_fetch_array($rs))
			{
				$id=$row[2];
				
	
	$r1=mysqli_query($con,"select result.* from result,athlete_registration where  athlete_registration.regno=result.second and( result.first='$id' or result.second='$id' or result.third='$id') and result.meet_id='$meet' and result.evt_id!='$ev'");

 if(mysqli_num_rows($r1)>0)
		{
			while($row11=mysqli_fetch_array($r1))
			{
			if($row11[2]==$id)
			{
			$point1=10;
			}
			 if($row11[3]==$id)
			{
				
				$p1=5;
			}
			
		 if($row11[4]==$id)
				{
					
					$r2=3;
				}
				
			}}
				
				
			
	?>
  
 

    <tr>
      <th colspan="2" scope="col">SECOND</th>
    </tr>
    <tr>
      <td>Rank</td>
      <td>II</td>
    </tr>
    <tr>
      <td>Name of Athlete</td>
      <td> <?php echo $row[0]?></td>
    </tr>
    <tr>
      <td>Institution</td>
      <td> <?php echo $row[1]?></td>
    </tr>
    <tr>
      <td>Point</td>
      <td>5</td>
    </tr>
    <tr>
      <td>Total Point</td>
      <td><?php
      $a2=$r2+$point1+$p1+5;
      echo $a2 ?></td>
    </tr>
    <?php  

            mysqli_query($con,"insert into champion values(null,'$id','$a2','$meet')");
         

}}?>
  </table>
</td>

<br><br><br>

<td>
    <table width="400" border="1" cellspacing="0" cellpadding="10">
  <?php
  $point1=0;
  $p1=0;
  $r2=0;
  $rs=mysqli_query($con,"select athlete_registration.name,college_registration.clg_name,athlete_registration.regno from result,athlete_registration,college_registration where meet_id='$meet' and evt_id='$ev' and athlete_registration.regno=result.third and college_registration.lid=athlete_registration.clgid");
  if(mysqli_num_rows($rs)>0)
		{
			while($row=mysqli_fetch_array($rs))
			{
				$id=$row[2];
				
	
	$r1=mysqli_query($con,"select result.* from result,athlete_registration where  athlete_registration.regno=result.third and( result.first='$id' or result.second='$id' or result.third='$id') and result.meet_id='$meet' and result.evt_id!='$ev'");

 if(mysqli_num_rows($r1)>0)
		{
			while($row11=mysqli_fetch_array($r1))
			{
			if($row11[2]==$id)
			{
			$point1=10;
			}
			 if($row11[3]==$id)
			{
				
				$p1=5;
			}
			
				 if($row11[4]==$id)
				{
					
					$r2=3;
				}

      }}
					
			
	?>

    <tr>
      <th colspan="2" scope="col">THIRD</th>
    </tr>
    <tr>
      <td>Rank</td>
      <td>III</td>
    </tr>
    <tr>
      <td>Name of Athlete</td>
      <td> <?php echo $row[0]?></td>
    </tr>
    <tr>
      <td>Institution</td>
      <td> <?php echo $row[1]?></td>
    </tr>
    <tr>
      <td>Point</td>
      <td>5</td>
    </tr>
    <tr>
      <td>Total Point</td>
      <td><?php 
       $a3=$point1+$r2+$p1+3;
       echo $a3 ?></td>
    </tr>
    <?php  

            mysqli_query($con,"insert into champion values(null,'$id','$a3','$meet')");
    

}}?>
  </table>
  </td>
  </tr>
  </table> 
  
  <?php
}?>
</form>
</center>
</body>
<?php include("admin_footer.php")?>
</html>
<script language="javascript" type="text/javascript">
            var xmlHttp;
            function show(to){
				//alert(to)
				
                if (typeof XMLHttpRequest != "undefined"){
                xmlHttp= new XMLHttpRequest();
                }
                else if (window.ActiveXObject){
                    xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");
                }
                if (xmlHttp==null){
                    alert("Browser does not support XMLHTTP Request")
                    return;
                }
                var url="showevent.php";
                url +="?gender=" +to
                xmlHttp.onreadystatechange = stateChange;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            
            function stateChange(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
					//alert(xmlHttp.responseText)
                    document.getElementById("select").innerHTML=xmlHttp.responseText   
					
					
 

                }
            }
</script>


