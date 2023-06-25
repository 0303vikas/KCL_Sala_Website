

<?php 
    /*connection to get session user*/
    $connect_users_get_id =  mysqli_connect("localhost", "root", "", "users_list_info") ;
    if($connect_database_crud->connect_error){
    	die("Connection with user database failed:".$connect_database_crud->connect_error);
    }

/*connection to post comments*/
	$comments_db = mysqli_connect("localhost", "root", "", "user_comments");

	
	if($comments_db->connect_error) {
		die ("Connection error".$comments_db->connect_error);
	}



	/* get comment form the input field*/
	$comment_text = (isset($_POST['comment_text']) ? $_POST['comment_text'] : '');


    /* get user id of the session user*/
    if (isset($_SESSION['username'])){

    	
    	$user_n=$_SESSION['username'];

     	$get_user_id = "SELECT id as userid From users Where username = '$user_n'";
     	$get_user_id_query = mysqli_query($connect_users_get_id,$get_user_id);
     	$get_user_id_fetch = mysqli_fetch_array($get_user_id_query);
     	

     	$user_id_for_comments = $get_user_id_fetch["userid"];



     }
	    
	/*post the comment*/
	$sesson_user_name = $_SESSION['username'];
	if(isset($_POST['comment_text'])){$sql = "INSERT INTO housing_comments (id,user_id, user_name, body, created_date) VALUES ('','$user_id_for_comments','$sesson_user_name','$comment_text', now())";
	if(mysqli_query($comments_db, $sql)){}else{echo "Error: Cannot connect to the table";}}

/*get the no of comments*/
	$sql_get_last_id = "SELECT MAX(id) as rum From housing_comments";
	$sql_get_last_id_query = mysqli_query($comments_db,$sql_get_last_id);
	$sql_get_last_id_fetch = mysqli_fetch_array($sql_get_last_id_query);
	 
     	
      $max_id = $sql_get_last_id_fetch["rum"];

     /*loop to show all the comments on the accommodation page*/	
     	 for ($i=1; $i<=$max_id ; $i++) { 

				$get_comment = "SELECT body,user_name,created_date FROM housing_comments Where id=".$i;
     $get_it = mysqli_query($comments_db,$get_comment);
     $finally = mysqli_fetch_assoc($get_it);
     foreach ($get_it as $key => $value) {
     	$comment[$i] = $value['body'];
     	$comment_user_name[$i] = $value['user_name'];
     	$comment_date[$i] = $value['created_date'];

     } 
     	 	
     	 }

    ?>