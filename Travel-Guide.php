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
<head>
<link rel="stylesheet" type="text/css" href="styles/common.css">
<link rel="stylesheet" type="text/css" href="styles/travel-guide.css">
</head>
<body>
<header>
<?php
        include 'header.php';
?>

<?php

			include 'process.php';

?>

<div class="main-content">
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
    	<p class="user-logged-p">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p class="user-logged-p"> <a href="home.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

</header>

<section class="main-section" id="main-section">
    <h1 id="mainHeading"> 
	
	<?php
  
  $heading = $connect_database_crud->query("SELECT information FROM travel_guide_data WHERE comments = 'Starting heading (first Main)'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>
</h1>
	<div class="wrapper-for-cards" id="card-wrapper">
	   <div class="div-for-cards">
  	     <div class="card">
    	   <div class="content">
      	     <h2 class="title">
			   <?php
  
  			$heading = $connect_database_crud->query("SELECT information FROM travel_guide_data WHERE comments = 'first_title_heading'") or die($connect_database_crud->error);
 			 while($row = $heading->fetch_assoc()){
    			echo $row['information'];
 			 }


			?>
			   </h2>
      			<p class="copy">
				  <?php
  
  $para = $connect_database_crud->query("SELECT information FROM travel_guide_data WHERE comments = 'first_title_info'") or die($connect_database_crud->error);
  while($row = $para->fetch_assoc()){
	echo $row['information'];
  }


?>  
				</p>
      			<button class="btn" onclick="window.location.href='salo-iot-campus-guide.inc.php'">View</button>
    		</div>
  		   </div>
  		   <div class="card">
    					<div class="content">
      						<h2 class="title">
							  <?php
  
  $heading = $connect_database_crud->query("SELECT information FROM travel_guide_data WHERE comments = 'second_title_heading'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
	echo $row['information'];
  }


?>  
							  </h2>
      						<p class="copy">
							  <?php
  
  $para = $connect_database_crud->query("SELECT information FROM travel_guide_data WHERE comments = 'second_title_info'") or die($connect_database_crud->error);
  while($row = $para->fetch_assoc()){
	echo $row['information'];
  }


?>  
							  
							  </p>
      						<button class="btn" onclick="window.location.href='bus-travel-guide.inc.php'">View</button>
    					</div>
  					</div>
  					<div class="card">
    					<div class="content">
      						<h2 class="title">
							  <?php
  
  $heading = $connect_database_crud->query("SELECT information FROM travel_guide_data WHERE comments = 'third_title_heading'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
	echo $row['information'];
  }


?>  
							</h2>
      						<p class="copy">
							  <?php
  
  $para = $connect_database_crud->query("SELECT information FROM travel_guide_data WHERE comments = 'third_title_info'") or die($connect_database_crud->error);
  while($row = $para->fetch_assoc()){
	echo $row['information'];
  }


?>  
							  </p>
      						<button class="btn" onclick="window.location.href='train-travel-guide.inc.php'">View</button>
   						 </div>
  					</div>
  					<div class="card" id="last-card">
					    <div class="content">
      						<h2 class="title">

							  <?php
  
  $heading = $connect_database_crud->query("SELECT information FROM travel_guide_data WHERE comments = 'fourth_title_heading'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
	echo $row['information'];
  }


?>    
							  
							</h2>
      						<p class="copy">
							  <?php
  
  $para = $connect_database_crud->query("SELECT information FROM travel_guide_data WHERE comments = 'fourth_title_info'") or die($connect_database_crud->error);
  while($row = $para->fetch_assoc()){
	echo $row['information'];
  }


?>    
							</p>
     						<button class="btn" onclick="window.location.href='taxi-travel-guide.inc.php'">View</button>
    					</div>
  					</div>
				</div>
			</div>

</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/Travel-Guide.js"></script>
	<?php
    if($adminCHeck != 0){
                echo '<div class="topnav" id="myTopnav">
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
<style>
  .heading-panel{
    float:right;
    color:white;
    margin-right:5px;
    font-size:22px;
    padding:15px;
  }
</style>

</body>
</html>