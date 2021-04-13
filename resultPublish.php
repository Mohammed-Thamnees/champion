<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("admin_header.php")?>
<body style="font-size: 18px;">
<center>
  <h1>Result Publish</h1>
  <br><br>
  <form action="" method="post">
<table width="600" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <th scope="row"><label for="select">Select Meet</label>
      <label for="select6"></label></th>
      <td>
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
    </td>
  </tr>
  <tr>
    <th scope="row"><label for="select">Select Gender</label>
      <label for="select5"></label></th>
      <td>
      <select name="select5" id="select5" size="1px" onchange="shows(this.value)" required>
      <option></option>
      <option>Male</option>
      <option>Female</option>
      </select></td>
    </tr>
  <tr>
    <th scope="row"><label for="select">Select Event</label>
      <label for="select"></label></th>
      <td>
      <select name="select" id="select" size="1px" onchange="show(this.value)" required>
      <option></option>
        
		
      </select></td>
  </tr>
</table>
<br><br>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <th scope="row">1<sup>st</sup> Price</th>
    <th scope="row">2<sup>nd</sup> Price</th>
    <th scope="row">3<sup>rd</sup> Price</th>
  </tr>
  <tr>
    <td align="center">
    
      <select name="select2" id="select2" size="1px" required>
      
	  
      
      
      </select>
    </td>
    
    <td align="center"><label for="select3"></label>
      <select name="select3" id="select3" size="1px" required>
      
      
      
      </select>
    </td>
  
    
    <td align="center">
      <label for="select4"></label>
      <select name="select4" id="select4" size="1px" required>
      
      
      
      </select>
    </td>
  </tr>
  <tr>
    <th colspan="3" scope="row">
      <div class="form-group form-button">
      <input type="submit" name="button" id="button" value="Publish Result" class="form-submit"/></div>
    </th>
  </tr>
</table>

</form>
</center>
</body>
<?php
 include("admin_footer.php");
include("connection.php");
if(isset($_POST['button']))
{
  $meet=$_POST['select6'];
	$event=$_POST['select'];
	$first=$_POST['select2'];
	$second=$_POST['select3'];
	$third=$_POST['select4'];
	
	mysqli_query($con,"insert into result values(null,curdate(),'$first','$second','$third','$event','$meet')");

  ?>
  <script>
     alert("Result Published...");
   window.location="resultPublish.php";
    </script>

  <?php
	
}
	?>
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
                var url="shown.php";
                url +="?event= " +to
                xmlHttp.onreadystatechange = stateChange;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            
            function stateChange(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
					//alert(xmlHttp.responseText)
                    document.getElementById("select2").innerHTML=xmlHttp.responseText   
					 document.getElementById("select3").innerHTML=xmlHttp.responseText
					 document.getElementById("select4").innerHTML=xmlHttp.responseText 
					
 

                }
            }
</script>
<script language="javascript" type="text/javascript">
            var xmlHttp;
            function shows(to){
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
                xmlHttp.onreadystatechange = stateChange1;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            
            function stateChange1(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
					//alert(xmlHttp.responseText)
                    document.getElementById("select").innerHTML=xmlHttp.responseText   
					
					
 

                }
            }
</script>
