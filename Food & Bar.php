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
<link rel="stylesheet" type="text/css" href="Styles/Foodandbar.css">
 
  
<meta charset="UTF-8">

</head>

<body>

	  <header>

	  	<?php
	  			include 'process.php';

	  	?>

	  	<?php 
	  	    include 'comments_database_connection.php';
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


<a id="a-ref" href="#section1"><button id="mainHeading1"><h1 style="font-size: 30px;"><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM food_and_bar_data WHERE comments = 'market_data'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?> </h1></button></a><a href="#section2"><button  id="mainHeading6"><h1 style="font-size: 30px;">
<?php
  
  $heading = $connect_database_crud->query("SELECT information FROM food_and_bar_data WHERE comments = 'bar/club/pub_bank'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?> </h1></button></a><a href="#section3"><button id="mainHeading2"><h1  style="font-size: 30px;">
	<?php
  
  $heading = $connect_database_crud->query("SELECT information FROM food_and_bar_data WHERE comments = 'burger_data'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?>
</h1></button></a><a href="#section4"><button id="mainHeading3"><h1 style="font-size: 30px;"><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM food_and_bar_data WHERE comments = 'pizza_data'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?></h1></button></a><a href="#section5"><button id="mainHeading4"><h1  style="font-size: 30px;"><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM food_and_bar_data WHERE comments = 'cafe_data'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?></h1></button></a><a href="#section6"><button  id="mainHeading5"> <h1 style="font-size: 30px;"><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM food_and_bar_data WHERE comments = 'restaurants_data'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?></h1></button></a>

<section id="section1"> 
    
     
     <h1 id="mainHeading" style="font-size: 70px;margin-left: 20px;"><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM food_and_bar_data WHERE comments = 'market_data'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?></h1>
    
 

    <div class='others1' >
    	 
    	 <div class='pol' id='pol1_1'>
			<img class='polarised' id="polarised1_1" src="./images/Smarket.jpg" alt="Lidl image">
			<div class='polarisedtext' id="polarisedtext1_1" onclick="myFunction()">S-market</div>
			<div id="new_div1_1"></div>
		</div>
		<div class='pol' id='pol1_2'>
			<img class='polarised' id="polarised1_2" src="./images/Kmarket.jpg" alt="Lidl image">
			<div class='polarisedtext' id="polarisedtext1_2" onclick="myFunctionb()">K-market</div>
			<div id="new_div1_2"></div>
		</div>
		<div class='pol' id='pol1_3'>
			<img class='polarised' id="polarised1_3" src="./images/Rkioski.jpg" alt="Lidl image">
			<div class='polarisedtext' id="polarisedtext1_3" onclick="myFunctionc()">R-kioski</div>
			<div id="new_div1_3"></div>
		</div>
</div>

	<div class="other2" style="margin-left: 53px;">
	  	<div class='pol' id='pol1_4'>
			<img class='polarised' id="polarised1_4" src="./images/Lidl.jpg" alt="Lidl image">
			<div class='polarisedtext' id="polarisedtext1_4" onclick="myFunctiond()">Lidl</div>
			<div id="new_div1_4"></div>
		</div>

    </div>
    
	</section>


	<section id="section2">

   <h1 id="mainHeading" style="font-size: 70px;margin-left: 20px;"><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM food_and_bar_data WHERE comments = 'bar/club/pub_bank'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?><span style="margin-left: 840px;text-decoration: none;"><a id="span1" href="#a-ref" style="text-shadow: none;font-size: 50px;"><button style="padding:20px;">↑↑</button></a></span></h1>
    

    <div class='others1'>

	  	<div class='pol' id="pol2_1">
			<img class='polarised' id="polarised2_1" src="./images/pub1.jpg" alt="Pub image">
			<div class='polarisedtext' id="polarisedtext2_1" onclick="myFunctione()">LEO PUB</div>
			<div id="new_div2_1"></div>
		</div>
			
		<div class='pol' id='pol2_2'>
			<img class='polarised' id="polarised2_2" src="./images/pub2.png" alt="Pub image">
			<div class='polarisedtext' id="polarisedtext2_2" onclick="myFunctionf()">Bar&Cafe Volum</div>
			<div id="new_div2_2"></div>
		</div>

		<div class='pol' id='pol2_3'>
			<img class='polarised' id="polarised2_3" src="./images/bar1.jpg" alt="Bar image">
			<div class='polarisedtext' id="polarisedtext2_3" onclick="myFunctiong()">BAR BIZARRE</div>
			<div id="new_div2_3"></div>
		</div>

		
	</div>
	<div class="other2" style="margin-left: 53px;">
	    <div class='pol' id='pol2_4'>
			<img class='polarised' id="polarised2_4" src="./images/club1.jpg" alt="club image">
			<div class='polarisedtext' id="polarisedtext2_4" onclick="myFunctionh()">Rikala Night Club</div>
			<div id="new_div2_4"></div>
		</div>

		<div class='pol' id='pol2_5' style="margin-left: 73px;">
			<img class='polarised' id="polarised2_5" src="./images/pub3.jpg" alt="pub image">
			<div class='polarisedtext' id="polarisedtext2_5" onclick="myFunctioni()">WANHA MESTARI</div>
			<div id="new_div2_5"></div>
		</div>

    </div>
    
	</section>


	<section id="section3">

    <h1 id="mainHeading" style="font-size: 70px;margin-left: 20px;"><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM food_and_bar_data WHERE comments = 'pizza_data'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?><span style="margin-left: 1150px;text-decoration: none;"><a id="span1" href="#a-ref" style="text-shadow: none;font-size: 50px;"><button style="padding:20px;">↑↑</button></a></span></h1>
    
   

    <div class='others1'>

	  	<div class='pol' id="pol3_1">
			<img class='polarised' id="polarised3_1" src="./images/pizza1.jpg" alt="Pizza shop image">
			<div class='polarisedtext' id="polarisedtext3_1" onclick="myFunctionj()">ISTANBUL KEBAB</div>
			<div id="new_div3_1"></div>
		</div>
			
		<div class='pol' id='pol3_2'>
			<img class='polarised' id="polarised3_2" src="./images/pizza2.jpg" alt="Pizza shop image">
			<div class='polarisedtext' id="polarisedtext3_2" onclick="myFunctionk()">RAVINTOLA KANARI</div>
			<div id="new_div3_2"></div>
		</div>

		<div class='pol' id='pol3_3'>
			<img class='polarised' id="polarised3_3" src="./images/pizza3.jpg" alt="Pizza shop image">
			<div class='polarisedtext' id="polarisedtext3_3" onclick="myFunctionl()">KEBAB MARMAR</div>
			<div id="new_div3_3"></div>
		</div>

		
	</div>

	<div class="other2" style="margin-left: 53px;">
	    <div class='pol' id='pol3_4'>
			<img class='polarised' id="polarised3_4" src="./images/pizza4.jpg" alt="Pizza shop image">
			<div class='polarisedtext' id="polarisedtext3_4" onclick="myFunctionm()">AIRIN KEBAB</div>
			<div id="new_div3_4"></div>
		</div>

		<div class='pol' id='pol3_5' style="margin-left: 73px;">
			<img class='polarised' id="polarised3_5" src="./images/pizza5.jpg" alt="Pizza shop image">
			<div class='polarisedtext' id="polarisedtext3_5" onclick="myFunctionn()">SALON KEBAB PIZZERIA</div>
			<div id="new_div3_5"></div>
		</div>

    </div>
    
	</section>

	<section id="section4">

    <h1 id="mainHeading" style="font-size: 70px;margin-left: 20px;"><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM food_and_bar_data WHERE comments = 'burger_data'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?><span style="margin-left: 1080px;text-decoration: none;"><a id="span1" href="#a-ref" style="text-shadow: none;font-size: 50px;"><button style="padding:20px;">↑↑</button></a></span></h1>

    <div class="others1">

	  	<div class='pol' id="pol4_1">
			<img class='polarised' id="polarised4_1" src="./images/burger1.jpg" alt="Burger shop image">
			<div class='polarisedtext' id="polarisedtext4_1" onclick="myFunctiono()">HESBURGER</div>
			<div id="new_div4_1"></div>
		</div>
			
		<div class='pol' id='pol4_2'>
			<img class='polarised' id="polarised4_2" src="./images/burger2.jpg" alt="Burger shop image">
			<div class='polarisedtext' id="polarisedtext4_2" onclick="myFunctionp()">CANTINA ANTONIO</div>
			<div id="new_div4_2"></div>
		</div>

		<div class='pol' id='pol4_3'>
			<img class='polarised' id="polarised4_3" src="./images/burger3.jpg" alt="Burger shop image">
			<div class='polarisedtext' id="polarisedtext4_3" onclick="myFunctionq()">SUBWAY</div>
			<div id="new_div4_3"></div>
		</div>

		</div>
	
	 
    
	</section>

	<section id="section5">

    <h1 id="mainHeading" style="font-size: 70px;margin-left: 20px;">CAFE<span style="margin-left: 1190px;text-decoration: none;"><a id="span1" href="#a-ref" style="text-shadow: none;font-size: 50px;"><button style="padding:20px;">↑↑</button></a></span></h1>
   
 
    <div class='others1'>

	  	<div class='pol' id="pol5_1">
			<img class='polarised' id="polarised5_1" src="./images/cafe1.jpg" alt="Cafe shop image">
			<div class='polarisedtext' id="polarisedtext5_1" onclick="myFunctionr()">CAFÉ MAKU</div>
			<div id="new_div5_1"></div>
		</div>
			
		<div class='pol' id='pol5_2'>
			<img class='polarised' id="polarised5_2" src="./images/cafe2.jpg" alt="Cafe shop image">
			<div class='polarisedtext' id="polarisedtext5_2" onclick="myFunctions()">CAFE FIGARO</div>
			<div id="new_div5_2"></div>
		</div>

		<div class='pol' id='pol5_3'>
			<img class='polarised' id="polarised5_3" src="./images/cafe3.jpg" alt="Cafe shop image">
			<div class='polarisedtext' id="polarisedtext5_3" onclick="myFunctiont()">TORIKAFFE</div>
			<div id="new_div5_3"></div>
		</div>

		
	</div>

	<div class="other2" style="margin-left: 53px;">
	    <div class='pol' id='pol5_4'>
			<img class='polarised' id="polarised5_4" src="./images/cafe4.jpg" alt="Cafe shop image">
			<div class='polarisedtext' id="polarisedtext5_4" onclick="myFunctionu()">KUIRON KAHVILA</div>
			<div id="new_div5_4"></div>
		</div>

		<div class='pol' id='pol5_5' style="margin-left: 73px;">
			<img class='polarised' id="polarised5_5" src="./images/cafe5.jpg" alt="Cafe shop image">
			<div class='polarisedtext' id="polarisedtext5_5" onclick="myFunctionv()">CAFE HAIPARK</div>
			<div id="new_div5_5"></div>
		</div>

		<div class='pol' id='pol5_6' style="margin-left: 73px;">
			<img class='polarised' id="polarised5_6" src="./images/cafe6.jpg" alt="Cafe shop image">
			<div class='polarisedtext' id="polarisedtext5_6" onclick="myFunctionw()">CAFE 68</div>
			<div id="new_div5_6"></div>
		</div>

    </div>
    
	</section>

	<section id="section6">

 <h1 id="mainHeading" style="font-size: 70px;margin-left: 20px;"><?php
  
  $heading = $connect_database_crud->query("SELECT information FROM food_and_bar_data WHERE comments = 'restaurants_data'") or die($connect_database_crud->error);
  while($row = $heading->fetch_assoc()){
    echo $row['information'];
  }


?><span style="margin-left: 850px;text-decoration: none;"><a id="span1" href="#a-ref" style="text-shadow: none;font-size: 50px;"><button style="padding:20px;">↑↑</button></a></span></h1> 
 
    <div class='others1'>

	  	<div class='pol' id="pol6_1">
			<img class='polarised' id="polarised6_1" src="./images/restaruant1.jpg" alt="Restaruant shop image">
			<div class='polarisedtext' id="polarisedtext6_1" onclick="myFunctionx()">LONG TENG</div>
			<div id="new_div6_1"></div>
		</div>
			
		<div class='pol' id='pol6_2'>
			<img class='polarised' id="polarised6_2" src="./images/restaruant2.jpg" alt="Restaruant shop image">
			<div class='polarisedtext' id="polarisedtext6_2" onclick="myFunctiony()">KHAOSUK</div>
			<div id="new_div6_2"></div>
		</div>

		<div class='pol' id='pol6_3'>
			<img class='polarised' id="polarised6_3" src="./images/restaruant3.jpg" alt="Restaruant shop image">
			<div class='polarisedtext' id="polarisedtext6_3" onclick="myFunctionz()">RAVINTOLA BHANCHHA</div>
			<div id="new_div6_3"></div>
		</div>

		
		</div>
	<div class="other2" style="margin-left: 53px;">
	    <div class='pol' id='pol6_4'>
			<img class='polarised' id="polarised6_4" src="./images/restaruant4.jpg" alt="Restaruant shop image">
			<div class='polarisedtext' id="polarisedtext6_4" onclick="myFunctionza()">SUSHI HOUSE</div>
			<div id="new_div6_4"></div>
		</div>

		<div class='pol' id='pol6_5' style="margin-left: 73px;">
			<img class='polarised' id="polarised6_5" src="./images/restaruant5.jpg" alt="Restaruant shop image">
			<div class='polarisedtext' id="polarisedtext6_5" onclick="myFunctionzb()">JJ'S BBQ</div>
			<div id="new_div6_5"></div>
		</div>

			

    </div>
    
	</section>
 
		
</main>	

<?php
    include 'comment_box.php';
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
<link rel="stylesheet" type="text/css" href="Styles/register.css" />

<script type="text/javascript" src="scripts/Foodandbar.js"></script>
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
