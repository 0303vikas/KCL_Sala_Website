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
<link rel="stylesheet" type="text/css" href="styles/common.css" />
<link rel="stylesheet" type="text/css" href="styles/taxi-travel-guide-style.css" />


<body>
<header>
   <?php

      include 'process.php';

?>
<?php
        include 'header.php';
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
    <section class="main-wrapper">


       <main>
              <h1 class="mainHeading">  

                  <?php
  
  $heading = $connect_database_crud->query("SELECT information FROM travel_guide_data_part4_data WHERE comments = 'main Heading'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>

               </h1>
                <aside class="frame-holder">
                 <div class="pol" id="pol1_1">
                <img class="taxi_stand_polarised" id="polarised1_1" src="<?php
  
  $heading = $connect_database_crud->query("SELECT source FROM Images WHERE comments = 'Salo Taxi Stand'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['source'];
  }


?>" alt="Salo Taxi Stand" />
                <div class="polarisedtext" id="polarisedtext0_1" onclick="checkTaxi()">Show Map</div>
                </div>
                </aside>
                <div class="paragraph-taxi-travel-guide">
                
                  
                <p> 
                    <?php
  
  $heading = $connect_database_crud->query("SELECT information FROM travel_guide_data_part4_data WHERE comments = 'para1'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>

                </p>
                <p>
                <?php
  
  $heading = $connect_database_crud->query("SELECT information FROM travel_guide_data_part4_data WHERE comments = 'para2'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?> </p>
                

                </div>
                
                <div class="clearfix"></div>


       </main>

        
    </section>
        
        <script src="scripts/taxi-travel-guide-script.js"></script>
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
