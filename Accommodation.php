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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="Styles/common.css" />
<link rel="stylesheet" type="text/css" href="Styles/register.css" />
<link rel="stylesheet" type="text/css" href="Styles/accommodation.css"/>


</head>

 



<body>
	<header>
       <?php

      include 'process.php';
      include 'comments_database_connection_accommodation.php';

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
<br />
<div class="main">
<h1> 

 <?php
  
  $heading = $connect_database_crud->query("SELECT information FROM accommodation_data WHERE comments = 'accommodation_data'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>
</h1>
</div>
<br>
<div class = "wrapper">
<div class="background2">

<p>  In Salo finding an accomodation is not so tough , because its a small town where you can find your home in almost every 1km.</p>

<p> We have many options where you can have a look and choose the best deal which suits you. </p>
<br />



<br> <br>

<div class="hello1">
<div class="img1">
<img src=".\images\pii.jpeg" width="500" height="333"> 

<p class="p-links">
 <button style="background:black;
    margin-right:28px;">
   <a href = "https://fi.hotels.com/ho726063872/pii-hotel-salo-suomi/?rffrid=sem.hcom.FI.google.003.00.04.s.kwrd=c.342824824456.59748104117.1580687250..dsa-548385550014.1005734.1005734.0.CjwKCAiAnfjyBRBxEiwA-EECLLmh8c5HP4Jhsnf000NpJiO5kPlXVC4wuXa3_TJvDbL98xNpKFL3oRoCtqMQAvD_BwE.aw.ds&PSRC=AFF05&gclid=CjwKCAiAnfjyBRBxEiwA-EECLLmh8c5HP4Jhsnf000NpJiO5kPlXVC4wuXa3_TJvDbL98xNpKFL3oRoCtqMQAvD_BwE&gclsrc=aw.ds"> Click here ! </a> 
   </button>
   <button style="background:black;
    margin-right:28px;">
    <a href="https://www.google.com/maps/place/Piihotel/@60.3884719,23.1108605,17z/data=!3m1!4b1!4m8!3m7!1s0x468c46555cb43e6f:0xd635e57a737ad191!5m2!4m1!1i2!8m2!3d60.3884719!4d23.1130492?hl=sv"> Click here for directions.</a>
    </button> 
</p>
</div>
<div class='smile'> <p class="sansserif" id="p1"> <span class="headings" id="heading1">  <b>   <?php
  
  $heading = $connect_database_crud->query("SELECT information FROM accommodation_data WHERE comments = 'pii hotel heading'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?> </b> </span> 
<?php
  
  $heading = $connect_database_crud->query("SELECT information FROM accommodation_data WHERE comments = 'pii hotel'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>  </p>        </div> 
 </div>
 <br />
 <br />
 <br />




<div class="hello2"> 
<div class="img2"> 



<img src=".\images\hotel.jpg" width="500" height="333">
<p class="p-links"> <button style="background:black;
    margin-right:28px;"><a href = "https://fi.hotels.com/ho675161/?pa=8&tab=description&ZSX=0&SYE=3&q-room-0-children=0&q-room-0-adults=2"> Click here ! </a> </button> 
<button style="background:black;
    margin-right:28px;"><a href="https://www.google.com/maps/place/Hotelli+Salo/@60.3884716,23.1042944,15z/data=!4m15!1m6!2m5!1sphotelli+salo!5m3!5m2!4m1!1i2!3m7!1s0x468c465326f9be0d:0xa1780d1224aced92!5m2!4m1!1i2!8m2!3d60.3859675!4d23.1251704?hl=sv"> Click here for directions </a></button> </p>
</div>
<div class="smile"> <p class="sansserif" id="p2"><span class="headings" id="heading2">  <b>  <?php
  
  $heading = $connect_database_crud->query("SELECT information FROM accommodation_data WHERE comments = 'hotelli heading'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>  </b> </span>  
<?php
  
  $heading = $connect_database_crud->query("SELECT information FROM accommodation_data WHERE comments = 'hotelli'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>  </div></p>
</div><br />
<br />
 <br />
  
 

<div class="hello3">
<div class="img3">

<img src=".\images\ella hotel.jpg" width="500" height="333">

<p class="p-links"> <button style="background:black;
    margin-right:28px;"><a href = "https://apartmentsella.com/fi/etusivu">Click here ! </a></button>
<button style="background:black;
    margin-right:28px;"><a href="https://www.google.com/maps/place/Apartments+Ella/@60.3870204,23.1442023,17z/data=!3m1!4b1!4m5!3m4!1s0x468c47b46602db85:0xe333c40d9b165ea1!8m2!3d60.3870204!4d23.1463909?hl=sv"> Click here for directions </a></button></p>
</div><div class="smile"> <p class="sansserif" id="p3"><span class="headings" id="heading3">  <b>  <?php
  
  $heading = $connect_database_crud->query("SELECT information FROM accommodation_data WHERE comments = 'ella heading'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>  </b> </span>
<?php
  
  $heading = $connect_database_crud->query("SELECT information FROM accommodation_data WHERE comments = 'ella appartments'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?> 
 </p></div>
</div><br>   
<br />
<br />


<div class="hello4">
<div class="img4">

<img src=".\images\hotel salora.jpg" width="500" height="333">

<p class="p-links"><button style="background:black;
    margin-right:28px;"><a href = "https://www.yamsafer.com/en/finland/salo/hotel/hotel-salora"> Click here ! </a></button>
	<button style="background:black;
    margin-right:28px;"><a href="https://www.google.com/maps/place/Hotel+Salora/@60.3915936,23.1085712,17z/data=!3m1!4b1!4m8!3m7!1s0x468c47004239194f:0x50f18e707120be70!5m2!4m1!1i2!8m2!3d60.3915936!4d23.1107599?hl=sv"> Click here for directions </a></button></p>
</div>
<div class="smile"> <p class="sansserif" id="p4"> <span class="headings" id="heading4"> <b> <?php
  
  $heading = $connect_database_crud->query("SELECT information FROM accommodation_data WHERE comments = 'hotel salora heading'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>  </b></span><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM accommodation_data WHERE comments = 'hotel salora'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>  </p></div>
</div><br> 
<br />
 <br />


<div class="hello5">
<div class="img5">

<img src=".\images\scandic hotel.jpg" width="500" height="333">
<p class="p-links"><button style="background:black;
    margin-right:28px;"><a href =https://www.booking.com/hotel/fi/scandic-salo.sv.html?aid=310018;label=salo-_8IcHluDNdMI6vR0IzJxoAS151858855195%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atiaud-285284111006%3Akwd-295587871133%3Alp1005734%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YbC4OlOULAnvxFjnh9VL-5w;sid=3ed64c4f88f335415b1a231abbf04868;dest_id=-1385479;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=7;hpos=7;no_rooms=1;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1583349899;srpvid=ce3f8885c4ce0161;type=total;ucfs=1&#hotelTmpl> Click here ! </a></button>
<button style="background:black;
    margin-right:28px;"><a href="https://www.google.com/maps/place/Scandic+Salo/@60.3863254,23.1256314,17z/data=!3m1!4b1!4m8!3m7!1s0x468c476c6318ebcf:0x4b9887ce316d6a01!5m2!4m1!1i2!8m2!3d60.3863254!4d23.1278201?hl=sv"> Click here for directions </a></button></p>
</div>
<div class="smile"><p class="sansserif" id="p5"><span class="headings" id="heading5"> <b><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM accommodation_data WHERE comments = 'hotel scandic heading'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>  </b> </span><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM accommodation_data WHERE comments = 'hotel scandic'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>  
</p></div>
</div><br>  
 </div>
</div>
</div>
<?php
     include 'comment_box_accommodation.php';
?>
<br />
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
  #submit_comment{
        background:white;
        padding:10px;
        margin:20px;
                       }

  .get-comment-wrapper, .hide-comment-wrapper{
    text-align: center;

  }
  #get_comments, #hide_comments{
    background:white;
             padding:10px;
    margin:10px;
      
  }

</style>
</body>
</html>
