<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body style="font-size: 18px;"><form action="" method="post">
<center>

<table width="800" border="1" cellspacing="0" cellpadding="10">

<?php
include("connection.php");
$pq=mysqli_query($con,"select max(meet_id) from event_select");
while ($check=mysqli_fetch_array($pq)) {
  $cond=$check[0];
}
$rs="";
$r="";
  $rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.regno,athlete_registration.name,athlete_registration.gender,
college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.gender='male' and athlete_registration.ath_id in (select ath_id from event_select where evt_id=1 and meet_id=$cond)");
  ?>
  <tr>
    <th colspan="7"><h2>100 meter running</h2></th>
    </tr>
   <tr>
    <th width="18" scope="col">SI</th>
    <th width="63" scope="col">Reg.No</th>
    <th width="68" scope="col">Athlete Name</th>
    <th width="85" scope="col">College</th>
  </tr>
  <?php


$i=1;

while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['regno']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
  </tr>
  <?php $i++; }?>
  
</table><br />
<table width="800" border="1" cellspacing="0" cellpadding="10">

<?php
include("connection.php");
$pq=mysqli_query($con,"select max(meet_id) from event_select");
while ($check=mysqli_fetch_array($pq)) {
  $cond=$check[0];
}
$rs="";
$r="";
  $rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.regno,athlete_registration.name,athlete_registration.gender,
college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.gender='male' and athlete_registration.ath_id in (select ath_id from event_select where evt_id=2 and meet_id=$cond)");
  ?>
  <tr>
    <th colspan="7"><h2>200 meter running</h2></th>
    </tr>
   <tr>
    <th width="18" scope="col">SI</th>
    <th width="63" scope="col">Reg.No</th>
    <th width="68" scope="col">Athlete Name</th>
    <th width="85" scope="col">College</th>
  </tr>
  <?php


$i=1;

while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['regno']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
  </tr>
  <?php $i++; }?>
  
</table><br />
<table width="800" border="1" cellspacing="0" cellpadding="10">

<?php
include("connection.php");
$pq=mysqli_query($con,"select max(meet_id) from event_select");
while ($check=mysqli_fetch_array($pq)) {
  $cond=$check[0];
}
$rs="";
$r="";
  $rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.regno,athlete_registration.name,athlete_registration.gender,
college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.gender='male' and athlete_registration.ath_id in (select ath_id from event_select where evt_id=3 and meet_id=$cond)");
  ?>
  <tr>
    <th colspan="7"><h2>400 meter running</h2></th>
    </tr>
   <tr>
    <th width="18" scope="col">SI</th>
    <th width="63" scope="col">Reg.No</th>
    <th width="68" scope="col">Athlete Name</th>
    <th width="85" scope="col">College</th>
  </tr>
  <?php


$i=1;

while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['regno']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
  </tr>
  <?php $i++; }?>
  
</table><br />
<table width="800" border="1" cellspacing="0" cellpadding="10">

<?php
include("connection.php");
$pq=mysqli_query($con,"select max(meet_id) from event_select");
while ($check=mysqli_fetch_array($pq)) {
  $cond=$check[0];
}
$rs="";
$r="";
  $rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.regno,athlete_registration.name,athlete_registration.gender,
college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.gender='male' and athlete_registration.ath_id in (select ath_id from event_select where evt_id=4 and meet_id=$cond)");
  ?>
  <tr>
    <th colspan="7"><h2>800 meter running</h2></th>
    </tr>
   <tr>
    <th width="18" scope="col">SI</th>
    <th width="63" scope="col">Reg.No</th>
    <th width="68" scope="col">Athlete Name</th>
    <th width="85" scope="col">College</th>
  </tr>
  <?php


$i=1;

while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['regno']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
  </tr>
  <?php $i++; }?>
  
</table><br />
<table width="800" border="1" cellspacing="0" cellpadding="10">

<?php
include("connection.php");
$pq=mysqli_query($con,"select max(meet_id) from event_select");
while ($check=mysqli_fetch_array($pq)) {
  $cond=$check[0];
}
$rs="";
$r="";
  $rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.regno,athlete_registration.name,athlete_registration.gender,
college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.gender='male' and athlete_registration.ath_id in (select ath_id from event_select where evt_id=5 and meet_id=$cond)");
  ?>
  <tr>
    <th colspan="7"><h2>1500 meter running</h2></th>
    </tr>
   <tr>
    <th width="18" scope="col">SI</th>
    <th width="63" scope="col">Reg.No</th>
    <th width="68" scope="col">Athlete Name</th>
    <th width="85" scope="col">College</th>
  </tr>
  <?php


$i=1;

while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['regno']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
  </tr>
  <?php $i++; }?>
  
</table><br />
<table width="800" border="1" cellspacing="0" cellpadding="10">

<?php
include("connection.php");
$pq=mysqli_query($con,"select max(meet_id) from event_select");
while ($check=mysqli_fetch_array($pq)) {
  $cond=$check[0];
}
$rs="";
$r="";
  $rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.regno,athlete_registration.name,athlete_registration.gender,
college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.gender='male' and athlete_registration.ath_id in (select ath_id from event_select where evt_id=6 and meet_id=$cond)");
  ?>
  <tr>
    <th colspan="7"><h2>5000 meter running</h2></th>
    </tr>
   <tr>
    <th width="18" scope="col">SI</th>
    <th width="63" scope="col">Reg.No</th>
    <th width="68" scope="col">Athlete Name</th>
    <th width="85" scope="col">College</th>
  </tr>
  <?php


$i=1;

while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['regno']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
  </tr>
  <?php $i++; }?>
  
</table><br />
<table width="800" border="1" cellspacing="0" cellpadding="10">

<?php
include("connection.php");
$pq=mysqli_query($con,"select max(meet_id) from event_select");
while ($check=mysqli_fetch_array($pq)) {
  $cond=$check[0];
}
$rs="";
$r="";
  $rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.regno,athlete_registration.name,athlete_registration.gender,
college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.gender='male' and athlete_registration.ath_id in (select ath_id from event_select where evt_id=7 and meet_id=$cond)");
  ?>
  <tr>
    <th colspan="7"><h2>1000 meter running</h2></th>
    </tr>
   <tr>
    <th width="18" scope="col">SI</th>
    <th width="63" scope="col">Reg.No</th>
    <th width="68" scope="col">Athlete Name</th>
    <th width="85" scope="col">College</th>
  </tr>
  <?php


$i=1;

while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['regno']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
  </tr>
  <?php $i++; }?>
  
</table><br />
<table width="800" border="1" cellspacing="0" cellpadding="10">

<?php
include("connection.php");
$pq=mysqli_query($con,"select max(meet_id) from event_select");
while ($check=mysqli_fetch_array($pq)) {
  $cond=$check[0];
}
$rs="";
$r="";
  $rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.regno,athlete_registration.name,athlete_registration.gender,
college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.gender='male' and athlete_registration.ath_id in (select ath_id from event_select where evt_id=8 and meet_id=$cond)");
  ?>
  <tr>
    <th colspan="7"><h2>110 meter hurdles</h2></th>
    </tr>
   <tr>
    <th width="18" scope="col">SI</th>
    <th width="63" scope="col">Reg.No</th>
    <th width="68" scope="col">Athlete Name</th>
    <th width="85" scope="col">College</th>
  </tr>
  <?php


$i=1;

while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['regno']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
  </tr>
  <?php $i++; }?>
  
</table><br />
<table width="800" border="1" cellspacing="0" cellpadding="10">

<?php
include("connection.php");
$pq=mysqli_query($con,"select max(meet_id) from event_select");
while ($check=mysqli_fetch_array($pq)) {
  $cond=$check[0];
}
$rs="";
$r="";
  $rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.regno,athlete_registration.name,athlete_registration.gender,
college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.gender='male' and athlete_registration.ath_id in (select ath_id from event_select where evt_id=9 and meet_id=$cond)");
  ?>
  <tr>
    <th colspan="7"><h2>400 meter hurdles</h2></th>
    </tr>
   <tr>
    <th width="18" scope="col">SI</th>
    <th width="63" scope="col">Reg.No</th>
    <th width="68" scope="col">Athlete Name</th>
    <th width="85" scope="col">College</th>
  </tr>
  <?php


$i=1;

while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['regno']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
  </tr>
  <?php $i++; }?>
  
</table><br />
<table width="800" border="1" cellspacing="0" cellpadding="10">

<?php
include("connection.php");
$pq=mysqli_query($con,"select max(meet_id) from event_select");
while ($check=mysqli_fetch_array($pq)) {
  $cond=$check[0];
}
$rs="";
$r="";
  $rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.regno,athlete_registration.name,athlete_registration.gender,
college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.gender='male' and athlete_registration.ath_id in (select ath_id from event_select where evt_id=10 and meet_id=$cond)");
  ?>
  <tr>
    <th colspan="7"><h2>Shortput</h2></th>
    </tr>
   <tr>
    <th width="18" scope="col">SI</th>
    <th width="63" scope="col">Reg.No</th>
    <th width="68" scope="col">Athlete Name</th>
    <th width="85" scope="col">College</th>
  </tr>
  <?php


$i=1;

while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['regno']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
  </tr>
  <?php $i++; }?>
  
</table><br />
<table width="800" border="1" cellspacing="0" cellpadding="10">

<?php
include("connection.php");
$pq=mysqli_query($con,"select max(meet_id) from event_select");
while ($check=mysqli_fetch_array($pq)) {
  $cond=$check[0];
}
$rs="";
$r="";
  $rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.regno,athlete_registration.name,athlete_registration.gender,
college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.gender='male' and athlete_registration.ath_id in (select ath_id from event_select where evt_id=11 and meet_id=$cond)");
  ?>
  <tr>
    <th colspan="7"><h2>Disc Throw</h2></th>
    </tr>
   <tr>
    <th width="18" scope="col">SI</th>
    <th width="63" scope="col">Reg.No</th>
    <th width="68" scope="col">Athlete Name</th>
    <th width="85" scope="col">College</th>
  </tr>
  <?php


$i=1;

while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['regno']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
  </tr>
  <?php $i++; }?>
  
</table><br />
<table width="800" border="1" cellspacing="0" cellpadding="10">

<?php
include("connection.php");
$pq=mysqli_query($con,"select max(meet_id) from event_select");
while ($check=mysqli_fetch_array($pq)) {
  $cond=$check[0];
}
$rs="";
$r="";
  $rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.regno,athlete_registration.name,athlete_registration.gender,
college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.gender='male' and athlete_registration.ath_id in (select ath_id from event_select where evt_id=12 and meet_id=$cond)");
  ?>
  <tr>
    <th colspan="7"><h2>Javelin</h2></th>
    </tr>
   <tr>
    <th width="18" scope="col">SI</th>
    <th width="63" scope="col">Reg.No</th>
    <th width="68" scope="col">Athlete Name</th>
    <th width="85" scope="col">College</th>
  </tr>
  <?php


$i=1;

while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['regno']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
  </tr>
  <?php $i++; }?>
  
</table><br />
<table width="800" border="1" cellspacing="0" cellpadding="10">

<?php
include("connection.php");
$pq=mysqli_query($con,"select max(meet_id) from event_select");
while ($check=mysqli_fetch_array($pq)) {
  $cond=$check[0];
}
$rs="";
$r="";
  $rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.regno,athlete_registration.name,athlete_registration.gender,
college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.gender='male' and athlete_registration.ath_id in (select ath_id from event_select where evt_id=13 and meet_id=$cond)");
  ?>
  <tr>
    <th colspan="7"><h2>Hammer Throw</h2></th>
    </tr>
   <tr>
    <th width="18" scope="col">SI</th>
    <th width="63" scope="col">Reg.No</th>
    <th width="68" scope="col">Athlete Name</th>
    <th width="85" scope="col">College</th>
  </tr>
  <?php


$i=1;

while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['regno']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
  </tr>
  <?php $i++; }?>
  
</table><br />
<table width="800" border="1" cellspacing="0" cellpadding="10">

<?php
include("connection.php");
$pq=mysqli_query($con,"select max(meet_id) from event_select");
while ($check=mysqli_fetch_array($pq)) {
  $cond=$check[0];
}
$rs="";
$r="";
  $rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.regno,athlete_registration.name,athlete_registration.gender,
college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.gender='male' and athlete_registration.ath_id in (select ath_id from event_select where evt_id=14 and meet_id=$cond)");
  ?>
  <tr>
    <th colspan="7"><h2>Long Jump</h2></th>
    </tr>
   <tr>
    <th width="18" scope="col">SI</th>
    <th width="63" scope="col">Reg.No</th>
    <th width="68" scope="col">Athlete Name</th>
    <th width="85" scope="col">College</th>
  </tr>
  <?php


$i=1;

while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['regno']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
  </tr>
  <?php $i++; }?>
  
</table><br />
<table width="800" border="1" cellspacing="0" cellpadding="10">

<?php
include("connection.php");
$pq=mysqli_query($con,"select max(meet_id) from event_select");
while ($check=mysqli_fetch_array($pq)) {
  $cond=$check[0];
}
$rs="";
$r="";
  $rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.regno,athlete_registration.name,athlete_registration.gender,
college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.gender='male' and athlete_registration.ath_id in (select ath_id from event_select where evt_id=15 and meet_id=$cond)");
  ?>
  <tr>
    <th colspan="7"><h2>Triple Jump</h2></th>
    </tr>
   <tr>
    <th width="18" scope="col">SI</th>
    <th width="63" scope="col">Reg.No</th>
    <th width="68" scope="col">Athlete Name</th>
    <th width="85" scope="col">College</th>
  </tr>
  <?php


$i=1;

while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['regno']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
  </tr>
  <?php $i++; }?>
  
</table><br />
<table width="800" border="1" cellspacing="0" cellpadding="10">

<?php
include("connection.php");
$pq=mysqli_query($con,"select max(meet_id) from event_select");
while ($check=mysqli_fetch_array($pq)) {
  $cond=$check[0];
}
$rs="";
$r="";
  $rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.regno,athlete_registration.name,athlete_registration.gender,
college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.gender='male' and athlete_registration.ath_id in (select ath_id from event_select where evt_id=16 and meet_id=$cond)");
  ?>
  <tr>
    <th colspan="7"><h2>High Jump</h2></th>
    </tr>
   <tr>
    <th width="18" scope="col">SI</th>
    <th width="63" scope="col">Reg.No</th>
    <th width="68" scope="col">Athlete Name</th>
    <th width="85" scope="col">College</th>
  </tr>
  <?php


$i=1;

while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['regno']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
  </tr>
  <?php $i++; }?>
  
</table><br />
<table width="800" border="1" cellspacing="0" cellpadding="10">

<?php
include("connection.php");
$pq=mysqli_query($con,"select max(meet_id) from event_select");
while ($check=mysqli_fetch_array($pq)) {
  $cond=$check[0];
}
$rs="";
$r="";
  $rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.regno,athlete_registration.name,athlete_registration.gender,
college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.gender='male' and athlete_registration.ath_id in (select ath_id from event_select where evt_id=17 and meet_id=$cond)");
  ?>
  <tr>
    <th colspan="7"><h2>Pole Walt</h2></th>
    </tr>
   <tr>
    <th width="18" scope="col">SI</th>
    <th width="63" scope="col">Reg.No</th>
    <th width="68" scope="col">Athlete Name</th>
    <th width="85" scope="col">College</th>
  </tr>
  <?php


$i=1;

while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['regno']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
  </tr>
  <?php $i++; }?>
  
</table><br />
<table width="800" border="1" cellspacing="0" cellpadding="10">

<?php
include("connection.php");
$pq=mysqli_query($con,"select max(meet_id) from event_select");
while ($check=mysqli_fetch_array($pq)) {
  $cond=$check[0];
}
$rs="";
$r="";
  $rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.regno,athlete_registration.name,athlete_registration.gender,
college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.gender='male' and athlete_registration.ath_id in (select ath_id from event_select where evt_id=18 and meet_id=$cond)");
  ?>
  <tr>
    <th colspan="7"><h2>4*100 meter relay</h2></th>
    </tr>
   <tr>
    <th width="18" scope="col">SI</th>
    <th width="63" scope="col">Reg.No</th>
    <th width="68" scope="col">Athlete Name</th>
    <th width="85" scope="col">College</th>
  </tr>
  <?php


$i=1;

while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['regno']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
  </tr>
  <?php $i++; }?>
  
</table><br />
<table width="800" border="1" cellspacing="0" cellpadding="10">

<?php
include("connection.php");
$pq=mysqli_query($con,"select max(meet_id) from event_select");
while ($check=mysqli_fetch_array($pq)) {
  $cond=$check[0];
}
$rs="";
$r="";
  $rs=mysqli_query($con,"select athlete_registration.ath_id,athlete_registration.regno,athlete_registration.name,athlete_registration.gender,
college_registration.clg_name from athlete_registration inner join college_registration on athlete_registration.clgid=college_registration.lid where athlete_registration.gender='male' and athlete_registration.ath_id in (select ath_id from event_select where evt_id=19 and meet_id=$cond)");
  ?>
  <tr>
    <th colspan="7"><h2>4*400 meter relay</h2></th>
    </tr>
   <tr>
    <th width="18" scope="col">SI</th>
    <th width="63" scope="col">Reg.No</th>
    <th width="68" scope="col">Athlete Name</th>
    <th width="85" scope="col">College</th>
  </tr>
  <?php


$i=1;

while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $i?></td>
     <td><?php echo $row['regno']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['clg_name']?></td>
  </tr>
  <?php $i++; }?>
  
</table><br />
</center>
</form>
</body>
</html>