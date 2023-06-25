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
  error_reporting(0);

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles/home_admin.css">
  </head>
  <body>
      <?php

            include 'processing_home_data.php';
?>
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

  <div class="container">
    <?php
            $result = $db_connect_info->query("SELECT id, information, comments FROM homepage_data"); 


            ?>
            <div class="row justify-content-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Information</th>
                            <th>Comments</th>
                            
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <?php
                        while($row = $result->fetch_assoc()): ?>
            
                    <tbody>
                            <tr>
                                    <td>
                                        <?php echo $row['information']?>
                                    </td>
                                    <td>
                                        <?php echo $row['comments']?>
                                    </td>
                                    
                                    
                                    <td>
                                        <a href="home_admin.php?edit=<?php echo $row['id']?>" class="btn btn-info">Edit</a>
                                        <a href="home_admin.php?delete=<?php echo $row['id']?>" class="btn btn-danger">Delete</a>
                                    </td>
                            </tr>

                    </tbody>
                   <?php endwhile; ?>
                </table>
            </div>
            <?php
            //Using fetch_assoc to pull data from object
            
    ?>

    
<div class="row justify-content-center">
    <form action="processing_home_data.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="form-group">
            <label>Comments</label>
            <input type="text" name="comments" class="form-control"
                value="<?php echo $comments; ?>"
                 placeholder="The Comment">
        </div>
        <div class="form-group">
            <label> Information</label>
            <textarea  name="information" rows="10" cols="50" class="form-control" 
             placeholder="Enter the information"> <?php echo $information; ?></textarea>
        </div>
        <div class="form-group">
         
        <?php
                if ($update == true): 
              ?>
              <button type="submit" name="update" class="btn btn-info">Update</button>
                <?php else: ?>
            <button type="submit" name="save" class="btn btn-primary">Save</button>
                <?php endif; ?>
    </div>
    </form>
    </div>
                </div>


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        
        footer{
            height:20%;
         }
         hr{margin:0;
    border:2px groove silver;}
         p{margin: 0;}
     
        </style>
  </body>
  <?php
    if($adminCHeck != 0){
      echo '  <nav class="navbar navbar-expand-md navbar-light" style="padding:0;">
       
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarCollapse" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
              <li class="nav-item"  style="margin-right:5px;margin-left:10px;">
<a href="mainAdminuser.php" class="nav-link">User Information</a>
            </li>
              
              <li class="nav-item dropdown" style="margin-right:5px;margin-left:10px;">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Update Information</a>
                  <div class="dropdown-menu">
                     <a href="home_admin.php" class="dropdown-item">Home Information</a>
        <a href="accommodation_admin.php" class="dropdown-item">Accommodation Information</a>
        <a href="official_places_admin.php" class="dropdown-item">Official Places Information</a>
        <a href="Food&Bar_admin.php" class="dropdown-item">Food & Bar Information</a>
        <a href="general_admin.php" class="dropdown-item">General Information</a>
             <div class="dropdown-divider"></div>

        <a href="travel_guide_campus_admin.php" class="dropdown-item">Salo Campus Information</a>
        <a href="travel_guide_bus_admin.php" class="dropdown-item">Bus Station Information</a>
        <a href="travel_guide_train_admin.php" class="dropdown-item">Train Station Information</a>
        <a href="travel_guide_taxi_admin.php" class="dropdown-item">Taxi Guide Information</a>
                      
                      
                  </div>
              </li>
            <li class="nav-item" style="margin-right:5px;margin-left:10px;">
                  <a href="images_admin.php" class="nav-link">Update Images</a>
              </li>
            <li class="nav-item dropdown" style="margin-right:5px;margin-left:10px;">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Comments</a>
                  <div class="dropdown-menu">
                     <a href="accommodation_comments.php" class="dropdown-item">Accommodation Comments</a>
          <a href="Food&Bar_comments.php" class="dropdown-item">Food & Bar Comments</a>
          <a href="general_comments.php" class="dropdown-item">General Comments</a>
   
                      
                  </div>
              </li>
          </ul>
          <ul class="nav navbar-nav ml-auto">
              <li class="nav-item dropdown">
                  <a href="#" class="navbar-brand" data-toggle="dropdown">Admin Panel</a>
                  
              </li>
          </ul>
      </div>
  </nav>';
                }
                ?>
     <?php

            include 'tryfooter.php';

     ?>
     <style type="text/css">
         footer{
            height:20%;
         }
         hr{margin:0;
    border:2px groove silver;}
         p{margin: 0;}
         nav{
             background-color:#333!important;
             color:White;
             padding:0px;
         }
         nav >div > a, nav > a, nav > div{
             color:White!important;
         }
         .navbar-light .navbar-nav .nav-link{
             color:White;
         }
         .navbar-light .navbar-brand{
             color:White;
         }
         .navbar-light .navbar-nav .nav-link:hover{
             color:White;
             background-color:grey;
         }
         .navbar-light .navbar-brand:hover{
             color:White;

         }
         .navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link{
             color:white;
         }
         .dropdown-item:hover{
             background:#f2f2f2;
         }
         .navbar-light .navbar-nav .nav-link:active{
             color:White;
             background-color:green;
         }
     </style>
     </body>
</html>