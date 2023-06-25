<?php


    session_start();

    include 'db_connect_comments.php';

    $update = false;
    $body = "";
    $username = "";
    $date_created = ``;
    

    if(isset($_POST['save'])){
        $body = $_POST['body'];
        $username = $_POST['username'];
        $date_created = $_POST['date'];
       
        $db_connect_comments->query("INSERT INTO housing_comments (user_name, body) VALUES ('$username', '$body')") or die($db_connect_comments->error);

        $_SESSION['message'] = "Record has been saved!";
        $_SESSION['msg_type'] = "success";

        header("location: accommodation_comments.php");
    }

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];

        $db_connect_comments->query("DELETE FROM housing_comments WHERE id = $id") or die($db_connect_comments->error());
    
        $_SESSION['message'] = "Record has been deleted!";
        $_SESSION['msg_type'] = "danger";
        header("location: accommodation_comments.php");

    }
    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = $db_connect_comments->query("SELECT user_name, body FROM housing_comments WHERE id = $id") or die($db_connect_comments->error());
        if ($result->num_rows){
            $row = $result->fetch_array();
            $body = $row['body'];
            $username = $row['user_name'];
            $date_created = $row['created_date'];
            }
        }
        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $body = $_POST['body'];
            $username = $_POST['username'];
            $date_created = $_POST['date'];
            
        
            
    
            $db_connect_comments->query("UPDATE `housing_comments` SET `body` = '$body', `user_name` = '$username' WHERE `id` = $id") or die($db_connect_comments->error);
    
            $_SESSION['message'] = "Record has been updated";
            $_SESSION['msg_type'] = "warning";
    
            header("location: accommodation_comments.php");
    }
