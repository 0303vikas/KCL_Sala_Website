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
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles/register.css" />
<link rel="stylesheet" type="text/css" href="Styles/common.css" />
<link rel="stylesheet" type="text/css" href="Styles/official_places.css" />

</head>
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
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="home.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</header>
  <main>
	<center><h1> 

     <?php
  
  $heading = $connect_database_crud->query("SELECT information FROM official_places_data WHERE comments = 'official_places_data'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>


   </h1></center>
	<br>

	<h2> <u class="bank-h"> 
  <?php
  
  $heading = $connect_database_crud->query("SELECT information FROM official_places_data WHERE comments = 'official_places_bank'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?> </u> </h2>
    <br />
    <br />
    <br />

    <div class="wrapper">
	<p> In Salo you can find many banks like OP Bank, Danske Bank, Nordea Bank. Once you reach Salo IoT campus you will be guided to the OP-Bank where you can create your bank account. It's up to you that later you can change your bank if you want to. These bank are not far they are located in the city center, and all these bank provide good deals. </p> 

	<p More information about the banks in Salo where you can get more information about them.</p>  

	<br><br><br />

	<div class="hello1">
		<div class="img1">
			<img style="margin-left: 10px;" src="<?php
  
  $heading = $connect_database_crud->query("SELECT source FROM Images WHERE comments = 'OP Bank'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['source'];
}


?>" width=500 height=333>
			<p class="p-links"> <button> <a href = "https://www.op.fi/henkiloasiakkaat/paivittaiset"> Visit Website </a></button>
		    <button><a href ="https://www.google.com/maps/place/Lounaismaan+Osuuspankki/@60.3879358,23.1231102,17z/data=!3m1!4b1!4m5!3m4!1s0x468c47acc678a5b1:0x400cbe8994ba56e8!8m2!3d60.3879358!4d23.1252989"> Directions </a></button></p>
		</div>



	<div class='smile' style="margin-left: 10px;"> <p class="sansserif" id="p1"><span class="headings" id="heading1">   <b>  OP-Bank </b> </span> 

    <?php
  
  $heading = $connect_database_crud->query("SELECT information FROM official_places_data WHERE comments = 'op-bank'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>

   </p></div>
	</div><br />
	<br />
	<br />  
	<br />

	<div class="hello2"> 
<div class="img2"> 

	<img style="margin-left: 10px;" src="<?php
  
  $heading = $connect_database_crud->query("SELECT source FROM Images WHERE comments = 'Dankse Bank'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['source'];
}


?>" width="500" height ="333">
	<p class="p-links"><button><a href = "https://danskebank.fi/se/for-dig/for-dig">Visit Website  </a></button>
    <button> <a href = "https://www.google.com/maps/place/Danske+Bank/@60.3868213,23.1239332,17z/data=!3m1!4b1!4m5!3m4!1s0x468c47acd13e336d:0x74baa624577be049!8m2!3d60.3868213!4d23.1261219"> Directions </a></button></p>
</div>

<div class='smile'  style="margin-left: 10px;"> <p class="sansserif" id="p2"><span class="headings" id="heading2">   <b>  Danske Bank  </b></span> 

  <?php
  
  $heading = $connect_database_crud->query("SELECT information FROM official_places_data WHERE comments = 'danks bank'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>

  </p></div>  
</div> <br /><br /><br /> 
<br />  


 <div class="hello3">
 	<div class="img3">

 	<img style="margin-left: 10px;" src="<?php
  
  $heading = $connect_database_crud->query("SELECT source FROM Images WHERE comments = 'Nordea Bank'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['source'];
}


?>" width="500" height="333">
 	<p class="p-links"><button><a href ="https://www.nordea.fi/en/"> Visit Website  </a></button>
 	<button><a href = "https://www.google.com/maps/place/Nordea+Bank/@60.3868169,23.1247867,17z/data=!3m1!4b1!4m5!3m4!1s0x468c47ad2bef62ad:0x1e63b39efb650d9f!8m2!3d60.3868169!4d23.1269754?hl=sv"> Directions </a></button></p>
 </div>

 <div class="smile" style="margin-left:10px;"> <p class="sansserif" id="p3"><span class="headings" id="heading3">   <b>  Nordea Bank </b></span> 

  <?php
  
  $heading = $connect_database_crud->query("SELECT information FROM official_places_data WHERE comments = 'nordea bank'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>

 </p></div>

</div><br /><br /><br />



<h2 style="margin-left: 10px;"> <u class="police-h"> <?php
  
  $heading = $connect_database_crud->query("SELECT information FROM official_places_data WHERE comments = 'police-heading'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>  </u> </h2>
<br />
<br /><br />

<div class="hello4">
	<div class="img4">
 <img style="margin-left: 10px;" src="<?php
  
  $heading = $connect_database_crud->query("SELECT source FROM Images WHERE comments = 'Police'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['source'];
}


?>" width="500" height="333">
 <p class="p-links"><button><a href ="https://www.poliisi.fi/prime104/prime104/prime101.aspx"> Visit Website </a></button>
 <button><a href ="https://www.google.com/maps/place/Salo+polisstation/@60.3847036,23.1319341,17z/data=!3m1!4b1!4m5!3m4!1s0x468c464d300df349:0x94a83464f74c716!8m2!3d60.3847036!4d23.1341228?hl=sv"> Directions </a></button></p>
</div>
<div class="smile" style="margin-left: 10px;"> 

<p class="sansserif" id="p4"> <span class="headings" id="heading4">  <b><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM official_places_data WHERE comments = 'police-heading'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?></b> </span>
	<?php
  
  $heading = $connect_database_crud->query("SELECT information FROM official_places_data WHERE comments = 'Police'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>

</p> </div>

       </div>
</div>
</main>
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

 </html>    
 
 