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
<link rel="stylesheet" type="text/css" href="Styles/General.css" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>


<style type="text/css">
#admin_button_1{height: 395px;width: 405.78px;margin-left: 3.2%;margin-top: 30px;border: 5px #DCDCDC dashed;}
#admin_button_1_1{text-align: center;color: #E8E8E8;}


#admin_button_1:hover{box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);}


#admin_button_2{height: 395px;width: 405.78px;margin-left: 3.2%;margin-top: 30px;border: 5px #DCDCDC dashed;}
#admin_button_1_2{text-align: center;color: #E8E8E8;}


#admin_button_2:hover{box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);}

#admin_button_3{height: 395px;width: 405.78px;margin-left: 3.2%;margin-top: 30px;border: 5px #DCDCDC dashed;}
#admin_button_1_3{text-align: center;color: #E8E8E8;}


#admin_button_3:hover{box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);}

#admin_button_4{height: 395px;width: 405.78px;margin-left: 3.2%;margin-top: 30px;border: 5px #DCDCDC dashed;}
#admin_button_1_4{text-align: center;color: #E8E8E8;}


#admin_button_4:hover{box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);}

</style>


</head>

<body>

<body>

 <header>
 	<?php
 				include 'process.php';
 				include 'comments_database_connection_general.php';
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

	<a id="a-ref" href="#section1"><button id="mainHeading1"><h1 style="font-size: 30px;">
		<?php
  
  $heading = $connect_database_crud->query("SELECT information FROM other_places_data WHERE comments = 'gadgets_data'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>
	
</h1></button></a><a href="#section2"><button  id="mainHeading4"><h1 style="font-size: 30px;"><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM other_places_data WHERE comments = 'clothes_bank'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?></h1></button></a><a href="#section3"><button id="mainHeading2"><h1  style="font-size: 30px;"><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM other_places_data WHERE comments = 'sportsandgym_bank'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?></h1></button></a><a href="#section4"><button id="mainHeading3"><h1 style="font-size: 30px;"><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM other_places_data WHERE comments = 'shoes_data'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?></h1></button></a>

<section id='section1'> 

     
     
     <h1 id="mainHeading" style="font-size: 70px;margin-left: 20px;"><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM other_places_data WHERE comments = 'gadgets_data'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?></h1>
 

    <div class='others1'>

	    <div class='pol' id="pol1_1">
			<img class='polarised' id="polarised1_1"  src="./images/videog1.jpg" alt="Smarket image">
			<div class='polarisedtext' id="polarisedtext1_1" onclick="myFunction()">POP SHOP</div>
			<div id="new_div1_1"></div>

		</div>
			
		<div class='pol' id='pol1_2'>
			<img class='polarised' id="polarised1_2" src="./images/videog2.jpg" alt="Kmarket image">
			<div class='polarisedtext' id="polarisedtext1_2" onclick="myFunctionb()">VEIKON KONE</div>
			<div id="new_div1_2"></div>
		</div>

		<div class='pol' id='pol1_3'>
			<img class='polarised' id="polarised1_3" src="./images/videog3.jpg" alt="Rkioski image">
			<div class='polarisedtext' id="polarisedtext1_3" onclick="myFunctionc()">GIGANTTI</div>
			<div id="new_div1_3"></div>
		</div>

		
	</div>

	<div class="other2" >
	  	<div class='pol' id='pol1_4' style="margin-left: 3.2%;margin-right: 5.8%;">
			<img class='polarised' id="polarised1_4" src="./images/videog4.jpg" alt="Lidl image">
			<div class='polarisedtext' id="polarisedtext1_4" onclick="myFunctiond()">ELISA</div>
			<div id="new_div1_4"></div>
		</div>

		<button id="admin_button_1" style="">
			<div id="admin_button_1_1" style="">
				<span id="admin_button_1_1_1" style="font-size: 340px;">+</span>

		  	</div>
	 	</button>
    </div>
    
	</section>

	<section id="section2">

    <h1 id="mainHeading" style="font-size: 70px;margin-left: 20px;"><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM other_places_data WHERE comments = 'clothes_bank'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?><span style="margin-left: 1040px;text-decoration: none;"><a id="span1" href="#a-ref" style="text-shadow: none;font-size: 50px;"><button style="padding:20px;">↑↑</button></a></span></h1>

    <div class='others1'>

	  	<div class='pol' id="pol2_1">
			<img class='polarised' id="polarised2_1" src="./images/clothes1.jpg" alt="Pub image">
			<div class='polarisedtext' id="polarisedtext2_1" onclick="myFunctione()">STADIUM</div>
			<div id="new_div2_1"></div>
		</div>
			
		<div class='pol' id='pol2_2'>
			<img class='polarised' id="polarised2_2" src="./images/clothes2.jpg" alt="Pub image">
			<div class='polarisedtext' id="polarisedtext2_2" onclick="myFunctionf()">H&M</div>
			<div id="new_div2_2"></div>
		</div>

		<div class='pol' id='pol2_3'>
			<img class='polarised' id="polarised2_3" src="./images/clothes3.jpg" alt="Bar image">
			<div class='polarisedtext' id="polarisedtext2_3" onclick="myFunctiong()">SCANDINAVIAN OUTDOOR</div>
			<div id="new_div2_3"></div>
		</div>

		
	</div>
	<div class="other2" >
	    <div class='pol' id='pol2_4' style="margin-left: 3.2%;margin-right:5.8%;">
			<img class='polarised' id="polarised2_4" src="./images/clothes4.jpg" alt="club image">
			<div class='polarisedtext' id="polarisedtext2_4" onclick="myFunctionh()">KappAhl</div>
			<div id="new_div2_4"></div>
		</div>

		<div class='pol' id='pol2_5' style="margin-left: 3.2%;margin-right: 5.2%">
			<img class='polarised' id="polarised2_5" src="./images/clothes5.jpg" alt="pub image">
			<div class='polarisedtext' id="polarisedtext2_5" onclick="myFunctioni()">Dressmann</div>
			<div id="new_div2_5"></div>
		</div>

		<button id="admin_button_2" style="">
			<div id="admin_button_1_2" style="">
				<span id="admin_button_1_1_2" style="font-size: 340px;">+</span>

		  	</div>
	 	</button>

    </div>
    
	</section>

	<section id="section3">

    
  
  <h1 id="mainHeading" style="font-size: 70px;margin-left: 20px;"><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM other_places_data WHERE comments = 'sportsandgym_bank'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?><span style="margin-left: 750px;text-decoration: none;"><a id="span1" href="#a-ref" style="text-shadow: none;font-size: 50px;"><button style="padding:20px;">↑↑</button></a></span></h1>
   
    <div class='others1'>

	  	<div class='pol' id="pol3_1">
			<img class='polarised' id="polarised3_1" src="./images/ground1.jpg" alt="Pizza shop image">
			<div class='polarisedtext' id="polarisedtext3_1" onclick="myFunctionj()">Salon keskusurheilukenttä</div>
			<div id="new_div3_1"></div>
		</div>
			
		<div class='pol' id='pol3_2'>
			<img class='polarised' id="polarised3_2" src="./images/ground2.jpg" alt="Pizza shop image">
			<div class='polarisedtext' id="polarisedtext3_2" onclick="myFunctionk()">SSO-halli</div>
			<div id="new_div3_2"></div>
		</div>

		<div class='pol' id='pol3_3'>
			<img class='polarised' id="polarised3_3" src="./images/ground3.jpg" alt="Pizza shop image">
			<div class='polarisedtext' id="polarisedtext3_3" onclick="myFunctionl()">Salon urheilupuisto</div>
			<div id="new_div3_3"></div>
		</div>

		
	</div>

	<div class="other2" >
	    <div class='pol' id='pol3_4' style="margin-left: 3.2%;margin-right: 5.8%;">
			<img class='polarised' id="polarised3_4" src="./images/ground4.jpg" alt="Pizza shop image">
			<div class='polarisedtext' id="polarisedtext3_4" onclick="myFunctionm()">Gym & Fitness Center</div>
			<div id="new_div3_4"></div>
		</div>

		<div class='pol' id='pol3_5' style="margin-left: 3.2%;margin-right: 5.2%">
			<img class='polarised' id="polarised3_5" src="./images/ground5.jpg" alt="Pizza shop image">
			<div class='polarisedtext' id="polarisedtext3_5" onclick="myFunctionn()">Lady's Club</div>
			<div id="new_div3_5"></div>
		</div>

		<button id="admin_button_3" style="">
			<div id="admin_button_1_3" style="">
				<span id="admin_button_1_1_3" style="font-size: 340px;">+</span>

		  	</div>
	 	</button>

    </div>
    
	</section>

	

     <section id="section4">
     
    
     <h1 id="mainHeading" style="font-size: 70px;margin-left: 20px;"><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM other_places_data WHERE comments = 'shoes_data'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?><span style="margin-left: 1140px;text-decoration: none;"><a id="span1" href="#a-ref" style="text-shadow: none;font-size: 50px;"><button style="padding:20px;">↑↑</button></a></span></h1>

    <div class='others1'>

	  	<div class='pol' id="pol4_1">
			<img class='polarised' id="polarised4_1" src="./images/shoes1.jpg" alt="Burger shop image">
			<div class='polarisedtext' id="polarisedtext4_1" onclick="myFunctiono()">Kenkä Plaza</div>
			<div id="new_div4_1"></div>
		</div>
			
		<div class='pol' id='pol4_2'>
			<img class='polarised' id="polarised4_2" src="./images/shoes2.jpg" alt="Burger shop image">
			<div class='polarisedtext' id="polarisedtext4_2" onclick="myFunctionp()">Kookenkä</div>
			<div id="new_div4_2"></div>
		</div>

		<div class='pol' id='pol4_3'>
			<img class='polarised' id="polarised4_3" src="./images/flow1.jpg" alt="Burger shop image">
			<div class='polarisedtext' id="polarisedtext4_3" onclick="myFunctionq()">EkoCenter Salo</div>
			<div id="new_div4_3"></div>
		</div>


		

		
	</div>

	<div class="other2" >
		
		<button id="admin_button_4" style="">
			<div id="admin_button_1_4" style="">
				<span id="admin_button_1_1_4" style="font-size: 340px;">+</span>

		  	</div>
	 	</button>
	</div>
	 
    
	</section>

	
</main>


<?php
     include "comment_box_general.php";
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
<link rel="stylesheet" href="Styles/admin-panel.css">
<?php

include 'tryfooter.php';
?>
<link rel="stylesheet" type="text/css" href="Styles/register.css" />

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

<script type="text/javascript" src="scripts/General.js"></script>
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



