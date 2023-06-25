<?php 
require 'user_database_connect.php';
session_start(); 
$name = $_SESSION['username'];
$result = $connect_database_users->query("SELECT id, username, is_admin FROM users WHERE username = '$name'") or die($connect_database_users->error);
while ($data = $result->fetch_assoc())
{
   $adminCHeck =  $data['is_admin'];
}
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<?php

      include 'process.php';

?>
<head>
  <link rel="stylesheet" type="text/css" href="styles/homepage.css">
  <link rel="stylesheet" type="text/css" href="styles/common.css">
  <link rel="stylesheet" type="text/css" href="styles/register.css">
</head>
<header>
<?php include 'header.php';
?>
<div id="main-content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p >Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="home.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</header>
<section id="main-section">
<center>
   <h1 class="salo-heading" style="font-size: 100px;margin: 80px 0px 80px 0px;"><!-- TO add heading-->
   <?php
  
      $heading = $connect_database_crud->query("SELECT information FROM homepage_data WHERE comments = 'Starting heading (first Main)'") or die($connect_database_crud->error);
      while($row = $heading->fetch_assoc()){
        echo $row['information'];
      }
   
   
   ?></h1>
</center>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="<?php
  
  $heading = $connect_database_crud->query("SELECT source FROM Images WHERE comments = 'River Boats'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['source'];
  }


?>" style="width:100%; height: 400px;">
  <div class="text">River Boats</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="<?php
  
  $heading = $connect_database_crud->query("SELECT source FROM Images WHERE comments = 'Winter - Salo'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['source'];
  }


?>" style="width:100%; height: 400px;">
  <div class="text">Winter - Salo</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="<?php
  
  $heading = $connect_database_crud->query("SELECT source FROM Images WHERE comments = 'Night - Salo'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['source'];
  }


?>" style="width:100%; height: 400px;">
  <div class="text">Night - Salo</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="<?php
  
  $heading = $connect_database_crud->query("SELECT source FROM Images WHERE comments = 'Grassland - Salo'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['source'];
  }


?>" style="width:100%; height: 400px;">
  <div class="text">Grassland - Salo</div>

  
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
</div> 
<br>
<div class="salo-info-paras" id="paragraphs">
	<h2 class="heading2"><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM homepage_data WHERE comments = 'Starting heading (second Main)'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?></h2>
	    <br />
	<p class="salo-info-para-texts" id="para1"> 
 
 <?php
  $website_info_para = $connect_database_crud->query("SELECT information FROM homepage_data WHERE comments = 'Main info Paragraph'") or die($connect_database_crud->error);
  while($row = $website_info_para->fetch_assoc()){
    echo $row['information'];
  }
?>
  </p>
</div>
</section>
<?php
    if($adminCHeck != 0){
      echo '
      <div class="topnav" id="myTopnav">
        <a href="mainAdminuser.php">User Information</a>
        <div class="dropdown">
        <button class="dropbtn">Update Information 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="home_admin.php">Home Information</a>
          <a href="accommodation_admin.php">Accommodation Information</a>
          <a href="official_places_admin.php">Official Places Information</a>
          <a href="Food&Bar_admin.php">Food & Bar Information</a>
          <a href="general_admin.php">General Information</a>
          <a href="travel_guide_campus_admin.php">Salo Campus Information</a>
          <a href="travel_guide_bus_admin.php">Bus Station Information</a>
          <a href="travel_guide_train_admin.php">Train Station Information</a>
          <a href="travel_guide_taxi_admin.php">Taxi Guide Information</a>

        </div>
      </div> 				  
      <a href="images_admin.php">Update Images</a>
        <div class="dropdown">
          <button class="dropbtn">User Comments 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="accommodation_comments.php">Accommodation Comments</a>
            <a href="Food&Bar_comments.php">Food & Bar Comments</a>
            <a href="general_comments.php">General Comments</a>
          </div>
        </div> 
        <span class="heading-panel"> Admin Panel </span>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>';
                }
                ?>
<link rel="stylesheet" href="Styles/admin-panel.css">
<?php
    include 'tryfooter.php';
?>
<script type="text/javascript" src="scripts/homepage.js"></script>
<script>
  function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<style>
  .heading-panel{
    float:right;
    color:white;
    margin-right:5px;
    font-size:22px;
    padding:15px;
  }
</style>