<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

<style type="text/css">
  .dropbtn {
  background-color: #474645;
  color: white;
  padding-top: 30px;
  padding-right: 80px;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  max-width: 150px;

  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;

}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #6d6a73;
}
</style>

</head>
<?php
session_start();
if($_SESSION["lid"]=="")
{
	header("location:index.php");
}

?>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="index.php"><span class="color-highlight">K</span>erala <span class="color-highlight">S</span>tate <span class="color-highlight">A</span>thletics <span class="color-highlight">A</span>ssociation</a></a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="active"><a href="adminHome.php">Home</a></li>
          <li><a href="collegeView.php">College Approve</a></li>
          <li><a href="athleteView.php">Athlete Approve</a></li>
          <li><a href="meetRegister.php">Meet Register</a></li>
          <li><a href="resultPublish.php">Result Publish</a></li>
          <li><a href="logout.php">Log Out</a></li>

          <div class="dropdown">
  <button class="dropbtn">--More--</button>
  <div class="dropdown-content">
  <a href="complaintView.php" title="complaints">View complaints</a>
  <a href="athleteListadmin.php" title="view athlete list">View athlete list</a>
  <a href="resultViewadmin.php" title="view result">View result</a>
  <a href="championViewadmin.php" title="view result">View champion</a>
  <a href="eventGenderadmin.php" title="view event-list">View event-list</a>
  </div>
</div>

        </ul>

      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
</div>
<br><br><br>